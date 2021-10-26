<?php
namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputDefinition;
use Symfony\Component\Console\Input\InputOption;


class CreateUserCommand extends Command
{

    protected static $defaultName = 'app:Console-app';

    public function __construct()
    {
        parent::__construct();
    }

    protected function configure()
    {
        $this
        ->setDescription('Bu program girdiğiniz değer sayısınca bir sayı dizisi oluşturacak, en büyük ve en küçük rakamı ekrana yazdıracak.')

        ->addArgument('length',InputArgument::REQUIRED,'Array Length');
    }

    private function sort($length){
        $numbers = array();

        for ($i=0;$i<$length;$i++){
            array_push($numbers,rand(0,100));
        }
        $min = min($numbers);
        $max = max($numbers);
        
     echo 'Gelen Sayılar: ';
        print_r($numbers);
        echo 'En Büyük Sayı: '. $max . "\n" .'En Küçük Sayı: '. $min;
    }
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln($this->sort($input->getArgument('length')));

        return 0;
    }
}