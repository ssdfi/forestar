<?php
namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class AppMigrateCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('app:migrate-plurianual')
            ->setDescription('Actualiza expedientes plurianuales')
            ->addArgument('argument', InputArgument::OPTIONAL, 'Argument description')
            ->addOption('option', null, InputOption::VALUE_NONE, 'Option description')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $argument = $input->getArgument('argument');
        $em = $this->getContainer()->get('doctrine.orm.entity_manager');
        $query = $em->createQueryBuilder()
                    ->select('d.numeroInterno','count(d.numeroInterno) AS counter')
                    ->from('AppBundle:Expedientes','d')
                    ->where('d.expedientesAgrupadosOld is null')
                    ->groupby('d.numeroInterno')
                    ->having('count(d.numeroInterno) >= 2')
                    ->getQuery();
        $grouped = $query->getResult(\Doctrine\ORM\AbstractQuery::HYDRATE_ARRAY);
        $output->writeln('Comenzamos la Migracion');
        foreach ($grouped as $key => $value) {
          $expedientes = $em->getRepository('AppBundle:Expedientes')->findByNumeroInterno(array($value['numeroInterno']),array('id' => 'ASC'));
          $parent = $expedientes[0];
          $output->writeln('Expediente '.$expedientes[0]->getNumeroInterno());
          $this->setEtapaParent($parent);
          $parent->setPlurianual(true);
          $parent->setAgrupador(true);
          foreach ($expedientes as $key => $expediente) {
            if ($key >= 1) {
              $etapa = (int)$expediente->getAnio();
              if ($etapa >= 0 && $parent->getNumeroExpediente() === $expediente->getNumeroExpediente()){
                if ($expediente->getActividadesPresentadas()) {
                  $this->setNuevoExpediente($expediente->getActividadesPresentadas(), $parent, $etapa);
                }
                if ($expediente->getActividadesAprobadas()) {
                  $this->setNuevoExpediente($expediente->getActividadesAprobadas(), $parent, $etapa);
                }
                if ($expediente->getActividadesCertificadas()) {
                  $this->setNuevoExpediente($expediente->getActividadesCertificadas(), $parent, $etapa);
                }
                if ($expediente->getActividadesInspeccionadas()) {
                  $this->setNuevoExpediente($expediente->getActividadesInspeccionadas(), $parent, $etapa);
                }
                if ($expediente->getActividadesSig()) {
                  $this->setNuevoExpediente($expediente->getActividadesSig(), $parent, $etapa);
                }
                if ($expediente->getActividadesTitulares()) {
                  $this->setNuevoExpediente($expediente->getActividadesTitulares(), $parent, $etapa);
                }
                if ($expediente->getCronogramaPlantaciones()) {
                  $this->setNuevoExpediente($expediente->getCronogramaPlantaciones(), $parent, $etapa);
                }
                if ($expediente->getBeneficiosFiscales()) {
                  $this->setNuevoExpediente($expediente->getBeneficiosFiscales(), $parent, $etapa);
                }
                if ($expediente->getBeneficiosFiscalesSolicitados()) {
                  $this->setNuevoExpediente($expediente->getBeneficiosFiscalesSolicitados(), $parent, $etapa);
                }
                if ($expediente->getCobroBeneficios()) {
                  $this->setNuevoExpediente($expediente->getCobroBeneficios(), $parent, $etapa);
                }
                if ($expediente->getEstabilidadFiscales()) {
                  $this->setNuevoExpediente($expediente->getEstabilidadFiscales(), $parent, $etapa);
                }
                if ($expediente->getDeclaracionesIvas()) {
                  $this->setNuevoExpediente($expediente->getDeclaracionesIvas(), $parent, $etapa);
                }
                if ($expediente->getDeclaracionIvaResoluciones()) {
                  $this->setNuevoExpediente($expediente->getDeclaracionIvaResoluciones(), $parent, $etapa);
                }
                if ($expediente->getDisposicionesProvinciales()) {
                  $this->setNuevoExpediente($expediente->getDisposicionesProvinciales(), $parent, $etapa);
                }
                if ($expediente->getDocumentaciones()) {
                  $this->setNuevoExpediente($expediente->getDocumentaciones(), $parent, $etapa);
                }
                if ($expediente->getDocumentosLegales()) {
                  $this->setNuevoExpediente($expediente->getDocumentosLegales(), $parent, $etapa);
                }
                if ($expediente->getDocumentosLegales()) {
                  $this->setNuevoExpediente($expediente->getDocumentosLegales(), $parent, $etapa);
                }
                if ($expediente->getEstadoSituaciones()) {
                  $this->setNuevoExpediente($expediente->getEstadoSituaciones(), $parent, $etapa);
                }
                if ($expediente->getEvaluacionLegales()) {
                  $this->setNuevoExpediente($expediente->getEvaluacionLegales(), $parent, $etapa);
                }
                if ($expediente->getEvaluacionTecnicos()) {
                  $this->setNuevoExpediente($expediente->getEvaluacionTecnicos(), $parent, $etapa);
                }
                if ($expediente->getGarantias()) {
                  $this->setNuevoExpediente($expediente->getGarantias(), $parent, $etapa);
                }
                if ($expediente->getHistorialContables()) {
                  $this->setNuevoExpediente($expediente->getHistorialContables(), $parent, $etapa);
                }
                if ($expediente->getHistorialForestoIndustriales()) {
                  $this->setNuevoExpediente($expediente->getHistorialForestoIndustriales(), $parent, $etapa);
                }
                if ($expediente->getHistorialLegales()) {
                  $this->setNuevoExpediente($expediente->getHistorialLegales(), $parent, $etapa);
                }
                if ($expediente->getHistorialPromociones()) {
                  $this->setNuevoExpediente($expediente->getHistorialPromociones(), $parent, $etapa);
                }
                if ($expediente->getHistorialSigs()) {
                  $this->setNuevoExpediente($expediente->getHistorialSigs(), $parent, $etapa);
                }
                if ($expediente->getImpactosAmbientales()) {
                  $this->setNuevoExpediente($expediente->getImpactosAmbientales(), $parent, $etapa);
                }
                if ($expediente->getOtbns()) {
                  $this->setNuevoExpediente($expediente->getOtbns(), $parent, $etapa);
                }
                if ($expediente->getPredios()) {
                  $this->setNuevoExpediente($expediente->getPredios(), $parent, $etapa);
                }
                if ($expediente->getProduccionesVolumetricas()) {
                  $this->setNuevoExpediente($expediente->getProduccionesVolumetricas(), $parent, $etapa);
                }
                $parent->setExpedientesAgrupadosOld($expediente->getId());
              }
            }
          }
          $em->flush();
        }
        $output->writeln('Finalizamos migracion');
    }

        protected function setNuevoExpediente($array, $exp_new, $etapa){
          foreach ($array as $key => $value) {
            $value->setEtapa($etapa);
            $value->setExpediente($exp_new);
          }
        }

        protected function setEtapa($array, $etapa){
          foreach ($array as $key => $value) {
            $value->setEtapa($etapa);
          }
        }

        protected function setEtapaParent($expediente) {
          $etapa = (int)$expediente->getAnio();
          if ($expediente->getActividadesPresentadas()) {
            $this->setEtapa($expediente->getActividadesPresentadas(), $etapa);
          }
          if ($expediente->getActividadesAprobadas()) {
            $this->setEtapa($expediente->getActividadesAprobadas(), $etapa);
          }
          if ($expediente->getActividadesCertificadas()) {
            $this->setEtapa($expediente->getActividadesCertificadas(), $etapa);
          }
          if ($expediente->getActividadesInspeccionadas()) {
            $this->setEtapa($expediente->getActividadesInspeccionadas(), $etapa);
          }
          if ($expediente->getActividadesSig()) {
            $this->setEtapa($expediente->getActividadesSig(), $etapa);
          }
          if ($expediente->getActividadesTitulares()) {
            $this->setEtapa($expediente->getActividadesTitulares(), $etapa);
          }
          if ($expediente->getCronogramaPlantaciones()) {
            $this->setEtapa($expediente->getCronogramaPlantaciones(), $etapa);
          }
          if ($expediente->getBeneficiosFiscales()) {
            $this->setEtapa($expediente->getBeneficiosFiscales(), $etapa);
          }
          if ($expediente->getBeneficiosFiscalesSolicitados()) {
            $this->setEtapa($expediente->getBeneficiosFiscalesSolicitados(), $etapa);
          }
          if ($expediente->getCobroBeneficios()) {
            $this->setEtapa($expediente->getCobroBeneficios(), $etapa);
          }
          if ($expediente->getEstabilidadFiscales()) {
            $this->setEtapa($expediente->getEstabilidadFiscales(), $etapa);
          }
          if ($expediente->getDeclaracionesIvas()) {
            $this->setEtapa($expediente->getDeclaracionesIvas(), $etapa);
          }
          if ($expediente->getDeclaracionIvaResoluciones()) {
            $this->setEtapa($expediente->getDeclaracionIvaResoluciones(), $etapa);
          }
          if ($expediente->getDisposicionesProvinciales()) {
            $this->setEtapa($expediente->getDisposicionesProvinciales(), $etapa);
          }
          if ($expediente->getDocumentaciones()) {
            $this->setEtapa($expediente->getDocumentaciones(), $etapa);
          }
          if ($expediente->getDocumentosLegales()) {
            $this->setEtapa($expediente->getDocumentosLegales(), $etapa);
          }
          if ($expediente->getDocumentosLegales()) {
            $this->setEtapa($expediente->getDocumentosLegales(), $etapa);
          }
          if ($expediente->getEstadoSituaciones()) {
            $this->setEtapa($expediente->getEstadoSituaciones(), $etapa);
          }
          if ($expediente->getEvaluacionLegales()) {
            $this->setEtapa($expediente->getEvaluacionLegales(), $etapa);
          }
          if ($expediente->getEvaluacionTecnicos()) {
            $this->setEtapa($expediente->getEvaluacionTecnicos(), $etapa);
          }
          if ($expediente->getGarantias()) {
            $this->setEtapa($expediente->getGarantias(), $etapa);
          }
          if ($expediente->getHistorialContables()) {
            $this->setEtapa($expediente->getHistorialContables(), $etapa);
          }
          if ($expediente->getHistorialForestoIndustriales()) {
            $this->setEtapa($expediente->getHistorialForestoIndustriales(), $etapa);
          }
          if ($expediente->getHistorialLegales()) {
            $this->setEtapa($expediente->getHistorialLegales(), $etapa);
          }
          if ($expediente->getHistorialPromociones()) {
            $this->setEtapa($expediente->getHistorialPromociones(), $etapa);
          }
          if ($expediente->getHistorialSigs()) {
            $this->setEtapa($expediente->getHistorialSigs(), $etapa);
          }
          if ($expediente->getImpactosAmbientales()) {
            $this->setEtapa($expediente->getImpactosAmbientales(), $etapa);
          }
          if ($expediente->getOtbns()) {
            $this->setEtapa($expediente->getOtbns(), $etapa);
          }
          if ($expediente->getPredios()) {
            $this->setEtapa($expediente->getPredios(), $etapa);
          }
          if ($expediente->getProduccionesVolumetricas()) {
            $this->setEtapa($expediente->getProduccionesVolumetricas(), $etapa);
          }
        }

}
