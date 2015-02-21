<?php namespace Radic\Tests\BladeExtensions\Directives;

use Illuminate\Html\HtmlServiceProvider;
use Mockery as m;
use Radic\Testing\Traits\BladeViewTestingTrait;
use Radic\Tests\BladeExtensions\TestCase;

/**
 * Class ViewTest
 *
 * @author     Robin Radic
 *
 */
class AssignmentDirectivesTest extends TestCase
{

    public function setUp()
    {
        parent::setUp();
        $this->loadViewTesting();
        $this->registerHtml();
        $this->registerBlade();
    }

    public function testSet()
    {
        $this->view()->make('set', [
                'dataString'        => 'hello',
                'dataArray'         => $this->getData()->getValues()['names'],
                'dataClassInstance' => $this->getData(),
                'dataClassName'     => 'DataGenerator'
            ]
        )->render();
    }


}