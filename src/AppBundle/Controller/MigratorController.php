<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\BufferedOutput;

/**
 * Plantaciones controller.
 *
 * @Route("/migrator")
 */
class MigratorController extends Controller
{
    /**
     * @Route("/", name="migrator")
     */
    public function indexAction(Request $request)
    {
        $kernel = $this->get('kernel');
        $application = new Application($kernel);
        $application->setAutoExit(false);

        $input = new ArrayInput(array(
            'command' => 'app:migrate-plurianual'
        ));

        $output = new BufferedOutput();

        $application->run($input, $output);

        // return the output
        $content = $output->fetch();

        // Send the output of the console command as response
        return new Response($content);
    }


    /**
     * @Route("/remove", name="remove")
     */
    public function removeAction()
    {
      $kernel = $this->get('kernel');
      $application = new Application($kernel);
      $application->setAutoExit(false);

      $input = new ArrayInput(array(
          'command' => 'app:remove-plurianual'
      ));

      $output = new BufferedOutput();

      $application->run($input, $output);

      // return the output
      $content = $output->fetch();

      // Send the output of the console command as response
      return new Response($content);
    }
}
