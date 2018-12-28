#!/usr/bin/env php
<?php
require __DIR__.'/vendor/autoload.php';
require __DIR__.'/Factory/LandVehicleFactory.php';
require __DIR__.'/Builder/Villain.php';
require __DIR__.'/Builder/VillainBuilder.php';


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

            $johnyLawrence = (new VillainBuilder())
                ->withName("Johny Lawrence")
                ->withASadStory("had a mean super-rich stepfather")
                ->withAnIntelligenceLevel("a below average intelligence")
                ->withAppearance("a bully appearance")
                ->withAMortalEnemy("Daniel Larusso")
                ->withAnEvilPower("spread the Cobra Kai life-values all over the world")
                ->build();
            $johnyLawrence->doYourEvil();

            return $output->writeln("<info>$result</info>");
        })

    ->getApplication()
    ->run();
?>