<?php
namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class AppRemovePlurianualesCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('app:remove-plurianual')
            ->setDescription('Elimina expedientes plurianuales')
            ->addArgument('argument', InputArgument::OPTIONAL, 'Argument description')
            ->addOption('option', null, InputOption::VALUE_NONE, 'Option description')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $argument = $input->getArgument('argument');
        $em = $this->getContainer()->get('doctrine.orm.entity_manager');
        $query = $em->createQueryBuilder()
                    ->select('d.expedientesAgrupadosOld')
                    ->from('AppBundle:Expedientes','d')
                    ->where('d.expedientesAgrupadosOld is not null')
                    ->getQuery();
        $result = $query->getResult(\Doctrine\ORM\AbstractQuery::HYDRATE_ARRAY);
        $output->writeln('Comenzamos a Eliminar');

        foreach ($result as $key => $value) {
          foreach ($value['expedientesAgrupadosOld'] as $k => $v) {
            $expediente = $em->getRepository('AppBundle:Expedientes')->findById(array($v),array('id' => 'ASC'));
            if ($expediente) {
              $this->removeExpedientes($expediente[0]);
            }
          }
        }
        $output->writeln('Eliminamos todo');
    }
    protected function removeExpedientes($expediente)
    {
      $em = $this->getContainer()->get('doctrine.orm.entity_manager');
      $em->remove($expediente);
      $em->flush();
      $em->clear();
    }
}
