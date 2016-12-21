<?php
namespace Koara;

use Koara\Html\Html5Renderer;

class Html5RendererTest extends \PHPUnit_Framework_TestCase {

	private $renderer;
    private $parser;
	private $document;
	
	public function setUp() {
		$this->parser = new Parser();
		$this->renderer = new Html5Renderer();
	}
	
	public function testRender() {
        $this->document = $this->parser->parse("Test");
        $this->document->accept($this->renderer);
		$this->assertEquals("<p>Test</p>", $this->renderer->getOutput());
	}

    public function testRenderHardwrapTrue() {
        $this->renderer->setHardwrap(true);
        $this->document = $this->parser->parse("a\nb");
        $this->document->accept($this->renderer);
        $this->assertEquals("<p>a<br>\nb</p>", $this->renderer->getOutput());
    }
	
	public function testNoPartialResult() {
		$expected = "<!DOCTYPE html>\n";
 		$expected .= "<html>\n";
 		$expected .= "  <body>\n";
 		$expected .= "    <p>Test</p>\n";
 		$expected .= "  </body>\n";
 		$expected .= "</html>\n";
		
 		$this->renderer->setPartial(false);
        $this->document = $this->parser->parse("Test");
 		$this->document->accept($this->renderer);
 		$this->assertEquals($expected, $this->renderer->getOutput());
	}

    public function testHeadingIdsTrue() {
        $this->renderer->setHeadingIds(true);
        $this->document = $this->parser->parse("= A");
        $this->document->accept($this->renderer);
        $this->assertEquals("<h1 id=\"a\">A</h1>", $this->renderer->getOutput());
    }

    public function testHeadingIdsTrueMultipleWords() {
        $this->renderer->setHeadingIds(true);
        $this->document = $this->parser->parse("= This is a test");
        $this->document->accept($this->renderer);
        $this->assertEquals("<h1 id=\"this_is_a_test\">This is a test</h1>", $this->renderer->getOutput());
    }
}