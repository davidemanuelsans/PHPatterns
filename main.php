#!/usr/bin/env php
<?php
require __DIR__.'/vendor/autoload.php';
require __DIR__.'/Factory/LandVehicleFactory.php';
require_once __DIR__.'/Facade/NanbanDiplomat.php';

use Symfony\Component\Console\Application;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

(new Application('Main', '1.0.0'))
    ->register('solve!')
    ->addArgument('CarType', InputArgument::OPTIONAL, 'What are you going to use the car for?')
    ->addOption('say', null, InputOption::VALUE_REQUIRED, 'Custom greeting')
    ->setCode(
        function (InputInterface $input, OutputInterface $output) {
            $result = "";
            $vehicleType = $input->getArgument('CarType');

            $car = LandVehicleFactory::createLandVehicle($vehicleType);
            $car->move(3);

            $pedrinhoPortuguese = new NanbanDiplomat();
            echo($pedrinhoPortuguese->talkToTheShogun());

            return $output->writeln("<info>$result</info>");
        })

    ->getApplication()
    ->run();
?>