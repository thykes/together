<?php

namespace Kirby\Cli\Command;

use Toolkit;
use Panel;
use RuntimeException;
use Kirby;
use Kirby\Cli\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class Version extends Command {

  protected function configure() {
    $this->setName('version')
         ->setDescription('Prints the current versions of the core, the toolkit and the panel of your installation');
  }

  protected function execute(InputInterface $input, OutputInterface $output) {

    if(!$this->isInstalled()) {
      throw new RuntimeException('Invalid Kirby installation');
    }

    // bootstrap the core
    $this->bootstrap();

    $output->writeln("<info>Core:\t\t" . kirby::version() . "</info>");
    $output->writeln("<info>Toolkit:\t" . toolkit::version() . "</info>");

    // also check for the panel version, if it is installed
    if(is_dir($this->dir() . '/panel')) {

      if(!is_file($this->dir() . '/panel/app/bootstrap.php')) {
        throw new RuntimeException('The panel does not seem to be correctly installed');
      }

      // bootstrap the panel
      require $this->dir() . '/panel/app/bootstrap.php';

      $output->writeln("<info>Panel:\t\t" . panel::version() . "</info>");

    }

  }

}