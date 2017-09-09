<?php



class mainpage
{
	
	private $head_in2 = '
	
	                                                          
                                                          </form></div>
                                          
                                          		<div class="cleared"></div>
                                              </div>
                                          </div>
                          		<div class="cleared"></div>
                              </div>
                          </div>
                          <div class="art-block">
                              <div class="art-block-body">
                                     
                    <div class="art-blockcontent">
                                              <div class="art-blockcontent-body">
	
	';	
	
//-----------------------------------------------------------------------------------------------------------------------------------------
	private $head_in1 = '<div class="cleared"></div>
                                              </div>
                                          </div>
                          		<div class="cleared"></div>
                              </div>
                          </div>
                          <div class="art-block">
                              <div class="art-block-body">
                                          
                                          
                                          		<div class="cleared"></div>
                                              </div>
                                          </div>
                          		<div class="cleared"></div>
                              </div>
                          </div>
                          <div class="cleared"></div>
                        </div>
                    </div>
                </div>
                <div class="cleared"></div>
                <div class="art-footer">
                    <div class="art-footer-t"></div>
                    <div class="art-footer-l"></div>
                    <div class="art-footer-b"></div>
                    <div class="art-footer-r"></div>
                    <div class="art-footer-body">
                         <a href="#" class="art-rss-tag-icon" title="RSS"></a>
                        <div class="art-footer-text">
                            <p>';
							
		//	
//-----------------------------------------------------------------------------------------------------------------------------------------       

                 
          private $head_end = '</p><p> Bu Bir <a href="http://www.smart-gt"> Smart-GT Internet Hizmetleri</a> Ürünüdür...</p>
		  				</div>
                		<div class="cleared"></div>
                    </div>
                </div>
        		<div class="cleared"></div>
            </div>
        </div>
        <div class="cleared"></div>
        <p class="art-page-footer"></p>
    </div>
        </div>
    </div>

</body>
</html>
	
	';
	
/*--------------------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------------------------
       ------------------------------------------                   CODE START              ---------------------------------------
--------------------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------------------------*/


	
	function __construct()
	{
		
		//echo "...class in start || ";
		
		
		
	}
	function hea_2()
	{	
		echo $this->head_in2;
		
		
	}
	function hea_1()
	{
		echo $this->head_in1;
	}
	public function sayfalt($safyr)
	{
		echo $safyr;
		
	}
	

	function __destruct()
	{
						
						
		//echo " || class is end..";
		
		/*$head_e =*/	echo $this->head_end;
		
		//return $head_e;
	}


}


require("index3.php");



?>