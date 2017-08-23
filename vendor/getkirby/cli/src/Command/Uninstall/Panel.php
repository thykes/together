<?php

namespace Kirby\Cli\Command\Uninstall;

use Dir;
use RuntimeException;

use Kirby\Cli\Command;

use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\Question;
use Symfony\Component\Console\Question\ConfirmationQuestion;

class Panel extends Command {

  protected function configure() {
    $this->setName('uninstall:panel')
         ->setDescription('Deletes the panel');
  }

  protected function execute(InputInterface $input, OutputInterface $output) {

    if($this->isInstalled() === false) {
      throw new RuntimeException('Invalid Kirby installation');
    }

    $helper   = $this->getHelper('question');
    $question = new ConfirmationQuestion('<info>Do you really want to uninstall the Panel? (y/n)</info>' . PHP_EOL . 'leave blank to cancel: ', false);      

    if($helper->ask($input, $output, $question)) {    
      // load kirby
      $this->bootstrap();

      // remove the panel folder  
      dir::remove($this->dir() . DS . 'panel');

      $output->writeln('<comment>The panel has been uninstalled!</comment>');
      $output->writeln('');
    }

  }

}