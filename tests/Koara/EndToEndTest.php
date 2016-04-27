<?php

namespace Koara;

use Koara\Html\Html5Renderer;

class EndToEndTest extends \PHPUnit_Framework_TestCase {
	
	
	public function testScenario000001() {
		$this->assertOutput("end2end-000001", "paragraphs");
	}
	
	public function testScenario000002() {
		$this->assertOutput("end2end-000002", "headings" );
	}
	
	public function testScenario000003() {
		$this->assertOutput("end2end-000003", Module::PARAGRAPHS, "headings" );
	}
	
	public function testScenario000004() {
		$this->assertOutput("end2end-000004", "lists" );
	}
	
	public function testScenario000005() {
		$this->assertOutput("end2end-000005", Module::PARAGRAPHS, "lists" );
	}
	
	public function testScenario000006() {
		$this->assertOutput("end2end-000006", "headings", "lists" );
	}
	
	public function testScenario000007() {
		$this->assertOutput("end2end-000007", Module::PARAGRAPHS, "headings", "lists" );
	}
	
	public function testScenario000008() {
		$this->assertOutput("end2end-000008", "links" );
	}
	
	public function testScenario000009() {
		$this->assertOutput("end2end-000009", Module::PARAGRAPHS, "links" );
	}
	
	public function testScenario000010() {
		$this->assertOutput("end2end-000010", "headings", "links" );
	}
	
	public function testScenario000011() {
		$this->assertOutput("end2end-000011", Module::PARAGRAPHS, "headings", "links" );
	}
	
	public function testScenario000012() {
		$this->assertOutput("end2end-000012", "lists", "links" );
	}
	
	public function testScenario000013() {
		$this->assertOutput("end2end-000013", Module::PARAGRAPHS, "lists", "links" );
	}
	
	public function testScenario000014() {
		$this->assertOutput("end2end-000014", "headings", "lists", "links" );
	}
	
	public function testScenario000015() {
		$this->assertOutput("end2end-000015", Module::PARAGRAPHS, "headings", "lists", "links" );
	}
	
	public function testScenario000016() {
		$this->assertOutput("end2end-000016", "images" );
	}
	
	public function testScenario000017() {
		$this->assertOutput("end2end-000017", Module::PARAGRAPHS, "images" );
	}
	
	public function testScenario000018() {
		$this->assertOutput("end2end-000018", "headings", "images" );
	}
	
	public function testScenario000019() {
		$this->assertOutput("end2end-000019", Module::PARAGRAPHS, "headings", "images" );
	}
	
	public function testScenario000020() {
		$this->assertOutput("end2end-000020", "lists", "images" );
	}
	
	public function testScenario000021() {
		$this->assertOutput("end2end-000021", Module::PARAGRAPHS, "lists", "images" );
	}
	
	public function testScenario000022() {
		$this->assertOutput("end2end-000022", "headings", "lists", "images" );
	}
	
	public function testScenario000023() {
		$this->assertOutput("end2end-000023", Module::PARAGRAPHS, "headings", "lists", "images" );
	}
	
	public function testScenario000024() {
		$this->assertOutput("end2end-000024", "links", "images" );
	}
	
	public function testScenario000025() {
		$this->assertOutput("end2end-000025", Module::PARAGRAPHS, "links", "images" );
	}
	
	public function testScenario000026() {
		$this->assertOutput("end2end-000026", "headings", "links", "images" );
	}
	
	public function testScenario000027() {
		$this->assertOutput("end2end-000027", Module::PARAGRAPHS, "headings", "links", "images" );
	}
	
	public function testScenario000028() {
		$this->assertOutput("end2end-000028", "lists", "links", "images" );
	}
	
	public function testScenario000029() {
		$this->assertOutput("end2end-000029", Module::PARAGRAPHS, "lists", "links", "images" );
	}
	
	public function testScenario000030() {
		$this->assertOutput("end2end-000030", "headings", "lists", "links", "images" );
	}
	
	public function testScenario000031() {
		$this->assertOutput("end2end-000031", Module::PARAGRAPHS, "headings", "lists", "links", "images" );
	}
	
	public function testScenario000032() {
		$this->assertOutput("end2end-000032", "formatting" );
	}
	
	public function testScenario000033() {
		$this->assertOutput("end2end-000033", Module::PARAGRAPHS, "formatting" );
	}
	
	public function testScenario000034() {
		$this->assertOutput("end2end-000034", "headings", "formatting" );
	}
	
	public function testScenario000035() {
		$this->assertOutput("end2end-000035", Module::PARAGRAPHS, "headings", "formatting" );
	}
	
	public function testScenario000036() {
		$this->assertOutput("end2end-000036", "lists", "formatting" );
	}
	
	public function testScenario000037() {
		$this->assertOutput("end2end-000037", Module::PARAGRAPHS, "lists", "formatting" );
	}
	
	public function testScenario000038() {
		$this->assertOutput("end2end-000038", "headings", "lists", "formatting" );
	}
	
	public function testScenario000039() {
		$this->assertOutput("end2end-000039", Module::PARAGRAPHS, "headings", "lists", "formatting" );
	}
	
	public function testScenario000040() {
		$this->assertOutput("end2end-000040", "links", "formatting" );
	}
	
	public function testScenario000041() {
		$this->assertOutput("end2end-000041", Module::PARAGRAPHS, "links", "formatting" );
	}
	
	public function testScenario000042() {
		$this->assertOutput("end2end-000042", "headings", "links", "formatting" );
	}
	
	public function testScenario000043() {
		$this->assertOutput("end2end-000043", Module::PARAGRAPHS, "headings", "links", "formatting" );
	}
	
	public function testScenario000044() {
		$this->assertOutput("end2end-000044", "lists", "links", "formatting" );
	}
	
	public function testScenario000045() {
		$this->assertOutput("end2end-000045", Module::PARAGRAPHS, "lists", "links", "formatting" );
	}
	
	public function testScenario000046() {
		$this->assertOutput("end2end-000046", "headings", "lists", "links", "formatting" );
	}
	
	public function testScenario000047() {
		$this->assertOutput("end2end-000047", Module::PARAGRAPHS, "headings", "lists", "links", "formatting" );
	}
	
	public function testScenario000048() {
		$this->assertOutput("end2end-000048", "images", "formatting" );
	}
	
	public function testScenario000049() {
		$this->assertOutput("end2end-000049", Module::PARAGRAPHS, "images", "formatting" );
	}
	
	public function testScenario000050() {
		$this->assertOutput("end2end-000050", "headings", "images", "formatting" );
	}
	
	public function testScenario000051() {
		$this->assertOutput("end2end-000051", Module::PARAGRAPHS, "headings", "images", "formatting" );
	}
	
	public function testScenario000052() {
		$this->assertOutput("end2end-000052", "lists", "images", "formatting" );
	}
	
	public function testScenario000053() {
		$this->assertOutput("end2end-000053", Module::PARAGRAPHS, "lists", "images", "formatting" );
	}
	
	public function testScenario000054() {
		$this->assertOutput("end2end-000054", "headings", "lists", "images", "formatting" );
	}
	
	public function testScenario000055() {
		$this->assertOutput("end2end-000055", Module::PARAGRAPHS, "headings", "lists", "images", "formatting" );
	}
	
	public function testScenario000056() {
		$this->assertOutput("end2end-000056", "links", "images", "formatting" );
	}
	
	public function testScenario000057() {
		$this->assertOutput("end2end-000057", Module::PARAGRAPHS, "links", "images", "formatting" );
	}
	
	public function testScenario000058() {
		$this->assertOutput("end2end-000058", "headings", "links", "images", "formatting" );
	}
	
	public function testScenario000059() {
		$this->assertOutput("end2end-000059", Module::PARAGRAPHS, "headings", "links", "images", "formatting" );
	}
	
	public function testScenario000060() {
		$this->assertOutput("end2end-000060", "lists", "links", "images", "formatting" );
	}
	
	public function testScenario000061() {
		$this->assertOutput("end2end-000061", Module::PARAGRAPHS, "lists", "links", "images", "formatting" );
	}
	
	public function testScenario000062() {
		$this->assertOutput("end2end-000062", "headings", "lists", "links", "images", "formatting" );
	}
	
	public function testScenario000063() {
		$this->assertOutput("end2end-000063", Module::PARAGRAPHS, "headings", "lists", "links", "images", "formatting" );
	}
	
	public function testScenario000064() {
		$this->assertOutput("end2end-000064", "blockquotes" );
	}
	
	public function testScenario000065() {
		$this->assertOutput("end2end-000065", Module::PARAGRAPHS, "blockquotes" );
	}
	
	public function testScenario000066() {
		$this->assertOutput("end2end-000066", "headings", "blockquotes" );
	}
	
	public function testScenario000067() {
		$this->assertOutput("end2end-000067", Module::PARAGRAPHS, "headings", "blockquotes" );
	}
	
	public function testScenario000068() {
		$this->assertOutput("end2end-000068", "lists", "blockquotes" );
	}
	
	public function testScenario000069() {
		$this->assertOutput("end2end-000069", Module::PARAGRAPHS, "lists", "blockquotes" );
	}
	
	public function testScenario000070() {
		$this->assertOutput("end2end-000070", "headings", "lists", "blockquotes" );
	}
	
	public function testScenario000071() {
		$this->assertOutput("end2end-000071", Module::PARAGRAPHS, "headings", "lists", "blockquotes" );
	}
	
	public function testScenario000072() {
		$this->assertOutput("end2end-000072", "links", "blockquotes" );
	}
	
	public function testScenario000073() {
		$this->assertOutput("end2end-000073", Module::PARAGRAPHS, "links", "blockquotes" );
	}
	
	public function testScenario000074() {
		$this->assertOutput("end2end-000074", "headings", "links", "blockquotes" );
	}
	
	public function testScenario000075() {
		$this->assertOutput("end2end-000075", Module::PARAGRAPHS, "headings", "links", "blockquotes" );
	}
	
	public function testScenario000076() {
		$this->assertOutput("end2end-000076", "lists", "links", "blockquotes" );
	}
	
	public function testScenario000077() {
		$this->assertOutput("end2end-000077", Module::PARAGRAPHS, "lists", "links", "blockquotes" );
	}
	
	public function testScenario000078() {
		$this->assertOutput("end2end-000078", "headings", "lists", "links", "blockquotes" );
	}
	
	public function testScenario000079() {
		$this->assertOutput("end2end-000079", Module::PARAGRAPHS, "headings", "lists", "links", "blockquotes" );
	}
	
	public function testScenario000080() {
		$this->assertOutput("end2end-000080", "images", "blockquotes" );
	}
	
	public function testScenario000081() {
		$this->assertOutput("end2end-000081", Module::PARAGRAPHS, "images", "blockquotes" );
	}
	
	public function testScenario000082() {
		$this->assertOutput("end2end-000082", "headings", "images", "blockquotes" );
	}
	
	public function testScenario000083() {
		$this->assertOutput("end2end-000083", Module::PARAGRAPHS, "headings", "images", "blockquotes" );
	}
	
	public function testScenario000084() {
		$this->assertOutput("end2end-000084", "lists", "images", "blockquotes" );
	}
	
	public function testScenario000085() {
		$this->assertOutput("end2end-000085", Module::PARAGRAPHS, "lists", "images", "blockquotes" );
	}
	
	public function testScenario000086() {
		$this->assertOutput("end2end-000086", "headings", "lists", "images", "blockquotes" );
	}
	
	public function testScenario000087() {
		$this->assertOutput("end2end-000087", Module::PARAGRAPHS, "headings", "lists", "images", "blockquotes" );
	}
	
	public function testScenario000088() {
		$this->assertOutput("end2end-000088", "links", "images", "blockquotes" );
	}
	
	public function testScenario000089() {
		$this->assertOutput("end2end-000089", Module::PARAGRAPHS, "links", "images", "blockquotes" );
	}
	
	public function testScenario000090() {
		$this->assertOutput("end2end-000090", "headings", "links", "images", "blockquotes" );
	}
	
	public function testScenario000091() {
		$this->assertOutput("end2end-000091", Module::PARAGRAPHS, "headings", "links", "images", "blockquotes" );
	}
	
	public function testScenario000092() {
		$this->assertOutput("end2end-000092", "lists", "links", "images", "blockquotes" );
	}
	
	public function testScenario000093() {
		$this->assertOutput("end2end-000093", Module::PARAGRAPHS, "lists", "links", "images", "blockquotes" );
	}
	
	public function testScenario000094() {
		$this->assertOutput("end2end-000094", "headings", "lists", "links", "images", "blockquotes" );
	}
	
	public function testScenario000095() {
		$this->assertOutput("end2end-000095", Module::PARAGRAPHS, "headings", "lists", "links", "images", "blockquotes" );
	}
	
	public function testScenario000096() {
		$this->assertOutput("end2end-000096", "formatting", "blockquotes" );
	}
	
	public function testScenario000097() {
		$this->assertOutput("end2end-000097", Module::PARAGRAPHS, "formatting", "blockquotes" );
	}
	
	public function testScenario000098() {
		$this->assertOutput("end2end-000098", "headings", "formatting", "blockquotes" );
	}
	
	public function testScenario000099() {
		$this->assertOutput("end2end-000099", Module::PARAGRAPHS, "headings", "formatting", "blockquotes" );
	}
	
	public function testScenario000100() {
		$this->assertOutput("end2end-000100", "lists", "formatting", "blockquotes" );
	}
	
	public function testScenario000101() {
		$this->assertOutput("end2end-000101", Module::PARAGRAPHS, "lists", "formatting", "blockquotes" );
	}
	
	public function testScenario000102() {
		$this->assertOutput("end2end-000102", "headings", "lists", "formatting", "blockquotes" );
	}
	
	public function testScenario000103() {
		$this->assertOutput("end2end-000103", Module::PARAGRAPHS, "headings", "lists", "formatting", "blockquotes" );
	}
	
	public function testScenario000104() {
		$this->assertOutput("end2end-000104", "links", "formatting", "blockquotes" );
	}
	
	public function testScenario000105() {
		$this->assertOutput("end2end-000105", Module::PARAGRAPHS, "links", "formatting", "blockquotes" );
	}
	
	public function testScenario000106() {
		$this->assertOutput("end2end-000106", "headings", "links", "formatting", "blockquotes" );
	}
	
	public function testScenario000107() {
		$this->assertOutput("end2end-000107", Module::PARAGRAPHS, "headings", "links", "formatting", "blockquotes" );
	}
	
	public function testScenario000108() {
		$this->assertOutput("end2end-000108", "lists", "links", "formatting", "blockquotes" );
	}
	
	public function testScenario000109() {
		$this->assertOutput("end2end-000109", Module::PARAGRAPHS, "lists", "links", "formatting", "blockquotes" );
	}
	
	public function testScenario000110() {
		$this->assertOutput("end2end-000110", "headings", "lists", "links", "formatting", "blockquotes" );
	}
	
	public function testScenario000111() {
		$this->assertOutput("end2end-000111", Module::PARAGRAPHS, "headings", "lists", "links", "formatting", "blockquotes" );
	}
	
	public function testScenario000112() {
		$this->assertOutput("end2end-000112", "images", "formatting", "blockquotes" );
	}
	
	public function testScenario000113() {
		$this->assertOutput("end2end-000113", Module::PARAGRAPHS, "images", "formatting", "blockquotes" );
	}
	
	public function testScenario000114() {
		$this->assertOutput("end2end-000114", "headings", "images", "formatting", "blockquotes" );
	}
	
	public function testScenario000115() {
		$this->assertOutput("end2end-000115", Module::PARAGRAPHS, "headings", "images", "formatting", "blockquotes" );
	}
	
	public function testScenario000116() {
		$this->assertOutput("end2end-000116", "lists", "images", "formatting", "blockquotes" );
	}
	
	public function testScenario000117() {
		$this->assertOutput("end2end-000117", Module::PARAGRAPHS, "lists", "images", "formatting", "blockquotes" );
	}
	
	public function testScenario000118() {
		$this->assertOutput("end2end-000118", "headings", "lists", "images", "formatting", "blockquotes" );
	}
	
	public function testScenario000119() {
		$this->assertOutput("end2end-000119", Module::PARAGRAPHS, "headings", "lists", "images", "formatting", "blockquotes" );
	}
	
	public function testScenario000120() {
		$this->assertOutput("end2end-000120", "links", "images", "formatting", "blockquotes" );
	}
	
	public function testScenario000121() {
		$this->assertOutput("end2end-000121", Module::PARAGRAPHS, "links", "images", "formatting", "blockquotes" );
	}
	
	public function testScenario000122() {
		$this->assertOutput("end2end-000122", "headings", "links", "images", "formatting", "blockquotes" );
	}
	
	public function testScenario000123() {
		$this->assertOutput("end2end-000123", Module::PARAGRAPHS, "headings", "links", "images", "formatting", "blockquotes" );
	}
	
	public function testScenario000124() {
		$this->assertOutput("end2end-000124", "lists", "links", "images", "formatting", "blockquotes" );
	}
	
	public function testScenario000125() {
		$this->assertOutput("end2end-000125", Module::PARAGRAPHS, "lists", "links", "images", "formatting", "blockquotes" );
	}
	
	public function testScenario000126() {
		$this->assertOutput("end2end-000126", "headings", "lists", "links", "images", "formatting", "blockquotes" );
	}
	
	public function testScenario000127() {
		$this->assertOutput("end2end-000127", Module::PARAGRAPHS, "headings", "lists", "links", "images", "formatting", "blockquotes" );
	}
	
	public function testScenario000128() {
		$this->assertOutput("end2end-000128", "code" );
	}
	
	public function testScenario000129() {
		$this->assertOutput("end2end-000129", Module::PARAGRAPHS, "code" );
	}
	
	public function testScenario000130() {
		$this->assertOutput("end2end-000130", "headings", "code" );
	}
	
	public function testScenario000131() {
		$this->assertOutput("end2end-000131", Module::PARAGRAPHS, "headings", "code" );
	}
	
	public function testScenario000132() {
		$this->assertOutput("end2end-000132", "lists", "code" );
	}
	
	public function testScenario000133() {
		$this->assertOutput("end2end-000133", Module::PARAGRAPHS, "lists", "code" );
	}
	
	public function testScenario000134() {
		$this->assertOutput("end2end-000134", "headings", "lists", "code" );
	}
	
	public function testScenario000135() {
		$this->assertOutput("end2end-000135", Module::PARAGRAPHS, "headings", "lists", "code" );
	}
	
	public function testScenario000136() {
		$this->assertOutput("end2end-000136", "links", "code" );
	}
	
	public function testScenario000137() {
		$this->assertOutput("end2end-000137", Module::PARAGRAPHS, "links", "code" );
	}
	
	public function testScenario000138() {
		$this->assertOutput("end2end-000138", "headings", "links", "code" );
	}
	
	public function testScenario000139() {
		$this->assertOutput("end2end-000139", Module::PARAGRAPHS, "headings", "links", "code" );
	}
	
	public function testScenario000140() {
		$this->assertOutput("end2end-000140", "lists", "links", "code" );
	}
	
	public function testScenario000141() {
		$this->assertOutput("end2end-000141", Module::PARAGRAPHS, "lists", "links", "code" );
	}
	
	public function testScenario000142() {
		$this->assertOutput("end2end-000142", "headings", "lists", "links", "code" );
	}
	
	public function testScenario000143() {
		$this->assertOutput("end2end-000143", Module::PARAGRAPHS, "headings", "lists", "links", "code" );
	}
	
	public function testScenario000144() {
		$this->assertOutput("end2end-000144", "images", "code" );
	}
	
	public function testScenario000145() {
		$this->assertOutput("end2end-000145", Module::PARAGRAPHS, "images", "code" );
	}
	
	public function testScenario000146() {
		$this->assertOutput("end2end-000146", "headings", "images", "code" );
	}
	
	public function testScenario000147() {
		$this->assertOutput("end2end-000147", Module::PARAGRAPHS, "headings", "images", "code" );
	}
	
	public function testScenario000148() {
		$this->assertOutput("end2end-000148", "lists", "images", "code" );
	}
	
	public function testScenario000149() {
		$this->assertOutput("end2end-000149", Module::PARAGRAPHS, "lists", "images", "code" );
	}
	
	public function testScenario000150() {
		$this->assertOutput("end2end-000150", "headings", "lists", "images", "code" );
	}
	
	public function testScenario000151() {
		$this->assertOutput("end2end-000151", Module::PARAGRAPHS, "headings", "lists", "images", "code" );
	}
	
	public function testScenario000152() {
		$this->assertOutput("end2end-000152", "links", "images", "code" );
	}
	
	public function testScenario000153() {
		$this->assertOutput("end2end-000153", Module::PARAGRAPHS, "links", "images", "code" );
	}
	
	public function testScenario000154() {
		$this->assertOutput("end2end-000154", "headings", "links", "images", "code" );
	}
	
	public function testScenario000155() {
		$this->assertOutput("end2end-000155", Module::PARAGRAPHS, "headings", "links", "images", "code" );
	}
	
	public function testScenario000156() {
		$this->assertOutput("end2end-000156", "lists", "links", "images", "code" );
	}
	
	public function testScenario000157() {
		$this->assertOutput("end2end-000157", Module::PARAGRAPHS, "lists", "links", "images", "code" );
	}
	
	public function testScenario000158() {
		$this->assertOutput("end2end-000158", "headings", "lists", "links", "images", "code" );
	}
	
	public function testScenario000159() {
		$this->assertOutput("end2end-000159", Module::PARAGRAPHS, "headings", "lists", "links", "images", "code" );
	}
	
	public function testScenario000160() {
		$this->assertOutput("end2end-000160", "formatting", "code" );
	}
	
	public function testScenario000161() {
		$this->assertOutput("end2end-000161", Module::PARAGRAPHS, "formatting", "code" );
	}
	
	public function testScenario000162() {
		$this->assertOutput("end2end-000162", "headings", "formatting", "code" );
	}
	
	public function testScenario000163() {
		$this->assertOutput("end2end-000163", Module::PARAGRAPHS, "headings", "formatting", "code" );
	}
	
	public function testScenario000164() {
		$this->assertOutput("end2end-000164", "lists", "formatting", "code" );
	}
	
	public function testScenario000165() {
		$this->assertOutput("end2end-000165", Module::PARAGRAPHS, "lists", "formatting", "code" );
	}
	
	public function testScenario000166() {
		$this->assertOutput("end2end-000166", "headings", "lists", "formatting", "code" );
	}
	
	public function testScenario000167() {
		$this->assertOutput("end2end-000167", Module::PARAGRAPHS, "headings", "lists", "formatting", "code" );
	}
	
	public function testScenario000168() {
		$this->assertOutput("end2end-000168", "links", "formatting", "code" );
	}
	
	public function testScenario000169() {
		$this->assertOutput("end2end-000169", Module::PARAGRAPHS, "links", "formatting", "code" );
	}
	
	public function testScenario000170() {
		$this->assertOutput("end2end-000170", "headings", "links", "formatting", "code" );
	}
	
	public function testScenario000171() {
		$this->assertOutput("end2end-000171", Module::PARAGRAPHS, "headings", "links", "formatting", "code" );
	}
	
	public function testScenario000172() {
		$this->assertOutput("end2end-000172", "lists", "links", "formatting", "code" );
	}
	
	public function testScenario000173() {
		$this->assertOutput("end2end-000173", Module::PARAGRAPHS, "lists", "links", "formatting", "code" );
	}
	
	public function testScenario000174() {
		$this->assertOutput("end2end-000174", "headings", "lists", "links", "formatting", "code" );
	}
	
	public function testScenario000175() {
		$this->assertOutput("end2end-000175", Module::PARAGRAPHS, "headings", "lists", "links", "formatting", "code" );
	}
	
	public function testScenario000176() {
		$this->assertOutput("end2end-000176", "images", "formatting", "code" );
	}
	
	public function testScenario000177() {
		$this->assertOutput("end2end-000177", Module::PARAGRAPHS, "images", "formatting", "code" );
	}
	
	public function testScenario000178() {
		$this->assertOutput("end2end-000178", "headings", "images", "formatting", "code" );
	}
	
	public function testScenario000179() {
		$this->assertOutput("end2end-000179", Module::PARAGRAPHS, "headings", "images", "formatting", "code" );
	}
	
	public function testScenario000180() {
		$this->assertOutput("end2end-000180", "lists", "images", "formatting", "code" );
	}
	
	public function testScenario000181() {
		$this->assertOutput("end2end-000181", Module::PARAGRAPHS, "lists", "images", "formatting", "code" );
	}
	
	public function testScenario000182() {
		$this->assertOutput("end2end-000182", "headings", "lists", "images", "formatting", "code" );
	}
	
	public function testScenario000183() {
		$this->assertOutput("end2end-000183", Module::PARAGRAPHS, "headings", "lists", "images", "formatting", "code" );
	}
	
	public function testScenario000184() {
		$this->assertOutput("end2end-000184", "links", "images", "formatting", "code" );
	}
	
	public function testScenario000185() {
		$this->assertOutput("end2end-000185", Module::PARAGRAPHS, "links", "images", "formatting", "code" );
	}
	
	public function testScenario000186() {
		$this->assertOutput("end2end-000186", "headings", "links", "images", "formatting", "code" );
	}
	
	public function testScenario000187() {
		$this->assertOutput("end2end-000187", Module::PARAGRAPHS, "headings", "links", "images", "formatting", "code" );
	}
	
	public function testScenario000188() {
		$this->assertOutput("end2end-000188", "lists", "links", "images", "formatting", "code" );
	}
	
	public function testScenario000189() {
		$this->assertOutput("end2end-000189", Module::PARAGRAPHS, "lists", "links", "images", "formatting", "code" );
	}
	
	public function testScenario000190() {
		$this->assertOutput("end2end-000190", "headings", "lists", "links", "images", "formatting", "code" );
	}
	
	public function testScenario000191() {
		$this->assertOutput("end2end-000191", Module::PARAGRAPHS, "headings", "lists", "links", "images", "formatting", "code" );
	}
	
	public function testScenario000192() {
		$this->assertOutput("end2end-000192", "blockquotes", "code" );
	}
	
	public function testScenario000193() {
		$this->assertOutput("end2end-000193", Module::PARAGRAPHS, "blockquotes", "code" );
	}
	
	public function testScenario000194() {
		$this->assertOutput("end2end-000194", "headings", "blockquotes", "code" );
	}
	
	public function testScenario000195() {
		$this->assertOutput("end2end-000195", Module::PARAGRAPHS, "headings", "blockquotes", "code" );
	}
	
	public function testScenario000196() {
		$this->assertOutput("end2end-000196", "lists", "blockquotes", "code" );
	}
	
	public function testScenario000197() {
		$this->assertOutput("end2end-000197", Module::PARAGRAPHS, "lists", "blockquotes", "code" );
	}
	
	public function testScenario000198() {
		$this->assertOutput("end2end-000198", "headings", "lists", "blockquotes", "code" );
	}
	
	public function testScenario000199() {
		$this->assertOutput("end2end-000199", Module::PARAGRAPHS, "headings", "lists", "blockquotes", "code" );
	}
	
	public function testScenario000200() {
		$this->assertOutput("end2end-000200", "links", "blockquotes", "code" );
	}
	
	public function testScenario000201() {
		$this->assertOutput("end2end-000201", Module::PARAGRAPHS, "links", "blockquotes", "code" );
	}
	
	public function testScenario000202() {
		$this->assertOutput("end2end-000202", "headings", "links", "blockquotes", "code" );
	}
	
	public function testScenario000203() {
		$this->assertOutput("end2end-000203", Module::PARAGRAPHS, "headings", "links", "blockquotes", "code" );
	}
	
	public function testScenario000204() {
		$this->assertOutput("end2end-000204", "lists", "links", "blockquotes", "code" );
	}
	
	public function testScenario000205() {
		$this->assertOutput("end2end-000205", Module::PARAGRAPHS, "lists", "links", "blockquotes", "code" );
	}
	
	public function testScenario000206() {
		$this->assertOutput("end2end-000206", "headings", "lists", "links", "blockquotes", "code" );
	}
	
	public function testScenario000207() {
		$this->assertOutput("end2end-000207", Module::PARAGRAPHS, "headings", "lists", "links", "blockquotes", "code" );
	}
	
	public function testScenario000208() {
		$this->assertOutput("end2end-000208", "images", "blockquotes", "code" );
	}
	
	public function testScenario000209() {
		$this->assertOutput("end2end-000209", Module::PARAGRAPHS, "images", "blockquotes", "code" );
	}
	
	public function testScenario000210() {
		$this->assertOutput("end2end-000210", "headings", "images", "blockquotes", "code" );
	}
	
	public function testScenario000211() {
		$this->assertOutput("end2end-000211", Module::PARAGRAPHS, "headings", "images", "blockquotes", "code" );
	}
	
	public function testScenario000212() {
		$this->assertOutput("end2end-000212", "lists", "images", "blockquotes", "code" );
	}
	
	public function testScenario000213() {
		$this->assertOutput("end2end-000213", Module::PARAGRAPHS, "lists", "images", "blockquotes", "code" );
	}
	
	public function testScenario000214() {
		$this->assertOutput("end2end-000214", "headings", "lists", "images", "blockquotes", "code" );
	}
	
	public function testScenario000215() {
		$this->assertOutput("end2end-000215", Module::PARAGRAPHS, "headings", "lists", "images", "blockquotes", "code" );
	}
	
	public function testScenario000216() {
		$this->assertOutput("end2end-000216", "links", "images", "blockquotes", "code" );
	}
	
	public function testScenario000217() {
		$this->assertOutput("end2end-000217", Module::PARAGRAPHS, "links", "images", "blockquotes", "code" );
	}
	
	public function testScenario000218() {
		$this->assertOutput("end2end-000218", "headings", "links", "images", "blockquotes", "code" );
	}
	
	public function testScenario000219() {
		$this->assertOutput("end2end-000219", Module::PARAGRAPHS, "headings", "links", "images", "blockquotes", "code" );
	}
	
	public function testScenario000220() {
		$this->assertOutput("end2end-000220", "lists", "links", "images", "blockquotes", "code" );
	}
	
	public function testScenario000221() {
		$this->assertOutput("end2end-000221", Module::PARAGRAPHS, "lists", "links", "images", "blockquotes", "code" );
	}
	
	public function testScenario000222() {
		$this->assertOutput("end2end-000222", "headings", "lists", "links", "images", "blockquotes", "code" );
	}
	
	public function testScenario000223() {
		$this->assertOutput("end2end-000223", Module::PARAGRAPHS, "headings", "lists", "links", "images", "blockquotes", "code" );
	}
	
	public function testScenario000224() {
		$this->assertOutput("end2end-000224", "formatting", "blockquotes", "code" );
	}
	
	public function testScenario000225() {
		$this->assertOutput("end2end-000225", Module::PARAGRAPHS, "formatting", "blockquotes", "code" );
	}
	
	public function testScenario000226() {
		$this->assertOutput("end2end-000226", "headings", "formatting", "blockquotes", "code" );
	}
	
	public function testScenario000227() {
		$this->assertOutput("end2end-000227", Module::PARAGRAPHS, "headings", "formatting", "blockquotes", "code" );
	}
	
	public function testScenario000228() {
		$this->assertOutput("end2end-000228", "lists", "formatting", "blockquotes", "code" );
	}
	
	public function testScenario000229() {
		$this->assertOutput("end2end-000229", Module::PARAGRAPHS, "lists", "formatting", "blockquotes", "code" );
	}
	
	public function testScenario000230() {
		$this->assertOutput("end2end-000230", "headings", "lists", "formatting", "blockquotes", "code" );
	}
	
	public function testScenario000231() {
		$this->assertOutput("end2end-000231", Module::PARAGRAPHS, "headings", "lists", "formatting", "blockquotes", "code" );
	}
	
	public function testScenario000232() {
		$this->assertOutput("end2end-000232", "links", "formatting", "blockquotes", "code" );
	}
	
	public function testScenario000233() {
		$this->assertOutput("end2end-000233", Module::PARAGRAPHS, "links", "formatting", "blockquotes", "code" );
	}
	
	public function testScenario000234() {
		$this->assertOutput("end2end-000234", "headings", "links", "formatting", "blockquotes", "code" );
	}
	
	public function testScenario000235() {
		$this->assertOutput("end2end-000235", Module::PARAGRAPHS, "headings", "links", "formatting", "blockquotes", "code" );
	}
	
	public function testScenario000236() {
		$this->assertOutput("end2end-000236", "lists", "links", "formatting", "blockquotes", "code" );
	}
	
	public function testScenario000237() {
		$this->assertOutput("end2end-000237", Module::PARAGRAPHS, "lists", "links", "formatting", "blockquotes", "code" );
	}
	
	public function testScenario000238() {
		$this->assertOutput("end2end-000238", "headings", "lists", "links", "formatting", "blockquotes", "code" );
	}
	
	public function testScenario000239() {
		$this->assertOutput("end2end-000239", Module::PARAGRAPHS, "headings", "lists", "links", "formatting", "blockquotes", "code" );
	}
	
	public function testScenario000240() {
		$this->assertOutput("end2end-000240", "images", "formatting", "blockquotes", "code" );
	}
	
	public function testScenario000241() {
		$this->assertOutput("end2end-000241", Module::PARAGRAPHS, "images", "formatting", "blockquotes", "code" );
	}
	
	public function testScenario000242() {
		$this->assertOutput("end2end-000242", "headings", "images", "formatting", "blockquotes", "code" );
	}
	
	public function testScenario000243() {
		$this->assertOutput("end2end-000243", Module::PARAGRAPHS, "headings", "images", "formatting", "blockquotes", "code" );
	}
	
	public function testScenario000244() {
		$this->assertOutput("end2end-000244", "lists", "images", "formatting", "blockquotes", "code" );
	}
	
	public function testScenario000245() {
		$this->assertOutput("end2end-000245", Module::PARAGRAPHS, "lists", "images", "formatting", "blockquotes", "code" );
	}
	
	public function testScenario000246() {
		$this->assertOutput("end2end-000246", "headings", "lists", "images", "formatting", "blockquotes", "code" );
	}
	
	public function testScenario000247() {
		$this->assertOutput("end2end-000247", Module::PARAGRAPHS, "headings", "lists", "images", "formatting", "blockquotes", "code" );
	}
	
	public function testScenario000248() {
		$this->assertOutput("end2end-000248", "links", "images", "formatting", "blockquotes", "code" );
	}
	
	public function testScenario000249() {
		$this->assertOutput("end2end-000249", Module::PARAGRAPHS, "links", "images", "formatting", "blockquotes", "code" );
	}
	
	public function testScenario000250() {
		$this->assertOutput("end2end-000250", "headings", "links", "images", "formatting", "blockquotes", "code" );
	}
	
	public function testScenario000251() {
		$this->assertOutput("end2end-000251", Module::PARAGRAPHS, "headings", "links", "images", "formatting", "blockquotes", "code" );
	}
	
	public function testScenario000252() {
		$this->assertOutput("end2end-000252", "lists", "links", "images", "formatting", "blockquotes", "code" );
	}
	
	public function testScenario000253() {
		$this->assertOutput("end2end-000253", Module::PARAGRAPHS, "lists", "links", "images", "formatting", "blockquotes", "code" );
	}
	
	public function testScenario000254() {
		$this->assertOutput("end2end-000254", "headings", "lists", "links", "images", "formatting", "blockquotes", "code" );
	}
	
	public function testScenario000255() {
		$this->assertOutput("end2end-000255", Module::PARAGRAPHS, "headings", "lists", "links", "images", "formatting", "blockquotes", "code" );
	}
	
	private function assertOutput($file) {
		$html = file_get_contents ('testsuite/output/html5/end2end/' . $file . '.htm' );
		$html = mb_convert_encoding ($html, 'UTF-8', mb_detect_encoding ($html, 'UTF-8, ISO-8859-1', true ) );
		
		$parser = new Parser ();
		$parser->setModules ( array_slice ( func_get_args (), 1 ) );
		$document = $parser->parseFile ('testsuite/input/end2end.kd' );
		$renderer = new Html5Renderer ();
		$document->accept ( $renderer );
		
		$this->assertEquals ( $html, $renderer->getOutput () );
	}
}
