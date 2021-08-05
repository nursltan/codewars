function validBraces($braces){
  do {
    $braces = str_replace(['()', '[]', '{}'], '', $braces, $count);
  } while ($count);

  return empty($braces);  
}
 ////////////////////////////////////////////////////////////////////////////////////
class ValidBracesTestCases extends TestCase
{
    public function testSamples() {
      $this->assertEquals(true, validBraces("()"));
      $this->assertEquals(false, validBraces("[(])"));
    }
}
