<?php
namespace Koara;

use Koara\Html\Html5Renderer;

class Html5RendererTest extends \PHPUnit_Framework_TestCase {

	private $renderer;
	private $document;
	
	public function setUp() {
		$parser = new Parser();
		$this->document = $parser->parse("Test");
		$this->renderer = new Html5Renderer();
	}
	
	public function testBasic() {
		$this->document->accept($this->renderer);
		$this->assertEquals("<p>Test</p>", $this->renderer->getOutput());
	}
	
	public function testNoPartialResult() {
		$expected = "<!DOCTYPE html>\n";
 		$expected .= "<html>\n";
 		$expected .= "  <body>\n";
 		$expected .= "    <p>Test</p>\n";
 		$expected .= "  </body>\n";
 		$expected .= "</html>\n";
		
 		$this->renderer->setPartial(false);
 		$this->document->accept($this->renderer);
 		$this->assertEquals($expected, $this->renderer->getOutput());
	}
	

}