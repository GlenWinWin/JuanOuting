
<!-- Log In -->
<!-- BEGIN # MODAL LOGIN -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="vertical-alignment-helper">

    	<div class="modal-dialog modal-lg vertical-align-center">
			<div class="modal-content">
				<div class="modal-header" align="center">

					<button type="button" class="close" data-dismiss="modal" aria-label="Close" >
						<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
					</button>
				</div>

                <div id="div-forms">
                    <form id="login-form">
		                <div class="modal-body">
                      <div class="col-sm-5 login-column">
                         <div class="row">
                             <div class="col-xs-12">
                                 <div class="form-group">
                                     <center><label class="header-modal-row">Log In into your account</label></center>
                                     <div class="has-feedback">
                                       <input type="text" id="login_username" class="input-content" placeholder="Username" required/></input>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="row">
                             <div class="col-xs-12">
                                 <div class="form-group">
                                     <div class="has-feedback">
                                       <input type="text" id="login_password" class="input-content" placeholder="Password" required/></input>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="row">
                             <div class="col-xs-12">
                                 <button class="btn btn-primary btn-lg btn-block login-button pull-right" type="button" style="padding:0px;">Log In</button>
                             </div>
                         </div>


                        <div class="checkbox col-sm-6 modal-spaces">
                            <label>
                                <input type="checkbox"> Remember me
                            </label>
                        </div>
                        <div class="col-sm-6 modal-spaces">
                          <button data-dismiss="modal" data-toggle="modal" data-target="#passwordModal" id="login_lost_btn" type="button" class="btn btn-link pull-right"  style="padding:6px 0px;">Lost Password?</button>
                        </div>
                      </div>
                      <div class="col-sm-1 modal-spaces" style="top:82px;">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <center><label>OR</label><center>
                                </div>
                            </div>
                        </div>
                      </div>
                      <div class="col-sm-5 login-column">
                         <div class="row">
                             <div class="col-xs-12">
                                 <div class="form-group">
                                     <center><button data-dismiss="modal" data-toggle="modal" data-target="#registerModal" id="login_register_btn" type="button" class="btn-link header-modal-row" >Don't have an account yet?</button></center>
                                     <a class="btn btn-primary social-facebook login-button" href="/auth/facebook">&emsp;&emsp;<i class="fa fa-facebook"></i> &emsp;Log In with Facebook</a>
                                 </div>
                             </div>
                         </div>
                         <div class="row">
                             <div class="col-xs-12">
                                 <div class="form-group">
                                     <div class="has-feedback">
                                       <a class="btn btn-primary social-twitter login-button" href="/auth/twitter"><i class="fa fa-twitter"></i>&emsp;Log In with Twitter</a>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="row">
                             <div class="col-xs-12">
                                <a class="btn btn-primary social-google login-button" href="/auth/google"><i class="fa fa-google-plus"></i>&emsp;Log In with Gmail</a>
                             </div>
                         </div>

                      </div>

        		    	</div>
				        <div class="modal-footer">

				        </div>
                    </form>
                    <!-- End # Login Form -->

                </div>
                <!-- End # DIV Form -->

              </div>
			</div>
		</div>
	</div>
    <!-- END # MODAL LOGIN -->
    <!-- Log In -->
    <!-- BEGIN # MODAL Password -->
    <div class="modal fade" id="passwordModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="vertical-alignment-helper">

        	<div class="modal-dialog modal-sm vertical-align-center">
    			<div class="modal-content">
    				<div class="modal-header" align="center">

    					<button type="button" class="close" data-dismiss="modal" aria-label="Close" >
    						<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
    					</button>
    				</div>

                    <div id="div-forms">
                        <form id="login-form">
    		                <div class="modal-body">
                             <div class="row">
                                 <div class="col-xs-12">
                                     <div class="form-group">
                                         <center><label>Forgot your account?</label></center>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-xs-12">
                             <div class="row">
                               <div class="col-xs-12">
                                   <div class="form-group">
                                       <div class="has-feedback">
                                         <p style="text-align:justify;">Please enter the email address associated with your account, and we’ll email you a link to reset your password.</p>
                                       </div>
                                   </div>
                               </div>
                                 <div class="col-xs-12">
                                     <div class="form-group">
                                         <div class="has-feedback">
                                           <input type="email" id="login_email" class="input-content" placeholder="Email Address" required/></input>
                                         </div>
                                     </div>
                                      <button class="btn btn-primary btn-lg btn-block login-button" type="button" style="padding:0px;width:100%;margin-bottom:20px;">Reset my Password</button>
                                 </div>


                             </div>

                           </div>


            		    	</div>
    				        <div class="modal-footer" style="padding-bottom: 20px;">
                      <div class="row">
                          <div class="col-xs-12">
                            <center>Have an account already? <button data-dismiss="modal" data-toggle="modal" data-target="#loginModal" id="login_register_btn" type="button" class="btn-link" >Log in here</button></center>
                              <center>Don't have an account yet? <button data-dismiss="modal" data-toggle="modal" data-target="#registerModal" id="login_register_btn" type="button" class="btn-link" >Register now</button></center>

                          </div>
                      </div>
    				        </div>
                        </form>
                        <!-- End # Login Form -->

                    </div>
                    <!-- End # DIV Form -->

                  </div>
    			</div>
    		</div>
    	</div>
        <!-- END # MODAL Password -->
    <!-- Modal Register -->
    <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="vertical-alignment-helper">

        	<div class="modal-dialog modal-sm vertical-align-center">
    			<div class="modal-content">
    				<div class="modal-header" align="center">

    					<button type="button" class="close" data-dismiss="modal" aria-label="Close" >
    						<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
    					</button>
    				</div>
                        <!-- Begin | Register Form -->
                        <form id="register-form">
                    		    <div class="modal-body">
                              <div class="col-sm-12">
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <center><label class="header-modal-row" style="padding-bottom: 0px;">Connect using your social media account</label></center>
                                    </div>
                                </div>
                                <div class="row social-button">
                                    <div class="col-xs-4">
                                        <div class="form-group">
                                            <a class="btn btn-primary social-facebook login-button" href="/auth/facebook" style="height: 43px;"><i class="fa fa-facebook social-signup"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                        <div class="form-group">
                                            <div class="has-feedback">
                                              <a class="btn btn-primary social-twitter login-button" href="/auth/twitter" style="height: 43px;"><i class="fa fa-twitter social-signup"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                        <div class="form-group">
                                            <div class="has-feedback">
                                              <a class="btn btn-primary social-google login-button" href="/auth/google" style="height: 43px;"><i class="fa fa-google-plus social-signup"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              <div class="row">
                                  <div class="col-xs-12">
                                      <div class="form-group">
                                          <center><label class="header-modal-row">Sign up for new account</label></center>
                                      </div>
                                  </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                          <div class="has-feedback" id="input-account1">
                                              <input type="text" id="login_fname " class="input-content name-label" placeholder="First Name" required/></input>
                                          </div>
                                          </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                          <div class="has-feedback" id="input-account">
                                              <input type="text" id="login_lname " class="input-content name-label" placeholder="Last Name" required/></input>
                                          </div>
                                          </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                          <div class="has-feedback" id="input-email">
                                            <input type="email" id="login_username" class="input-content name-label" placeholder="Email Address" required/></input>
                                          </div>
                                          </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                          <div class="has-feedback" id="input-password">
                                            <input type="password" id="login_password" class="input-content name-label" placeholder="Password" required/></input>
                                          </div>
                                          </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="form-group">
                                          <button class="btn btn-default dropdown-toggle input-content" type="button" data-toggle="dropdown">Month
                                            <span class="caret"></span></button>
                                            <ul class="dropdown-menu">
                                              <li value="1">January</li>
                                              <li value="2">February</li>
                                              <li value="3">March</li>
                                              <li value="4">April</li>
                                              <li value="5">May</li>
                                              <li value="6">June</li>
                                              <li value="7">July</li>
                                              <li value="8">August</li>
                                              <li value="9">September</li>
                                              <li value="10">October</li>
                                              <li value="11">November</li>
                                              <li value="12">December</li>
                                            </ul>
                                          </div>
                                    </div>

                                      <div class="col-xs-4">
                                          <div class="form-group">
                                            <button class="btn btn-default dropdown-toggle input-content" type="button" data-toggle="dropdown">Day
                                              <span class="caret"></span></button>
                                              <ul class="dropdown-menu">
                                                <li value="1">1</li>
                                                <li value="2">2</li>
                                                <li value="3">3</li>
                                                <li value="4">4</li>
                                                <li value="5">5</li>
                                                <li value="6">6</li>
                                                <li value="7">7</li>
                                                <li value="8">8</li>
                                                <li value="9">9</li>
                                                <li value="10">10</li>
                                                <li value="11">11</li>
                                                <li value="12">12</li>
                                                <li value="13">13</li>
                                                <li value="14">14</li>
                                                <li value="15">15</li>
                                                <li value="16">16</li>
                                                <li value="17">17</li>
                                                <li value="18">18</li>
                                                <li value="19">19</li>
                                                <li value="20">20</li>
                                                <li value="21">21</li>
                                                <li value="22">22</li>
                                                <li value="23">23</li>
                                                <li value="24">24</li>
                                                <li value="25">25</li>
                                                <li value="26">26</li>
                                                <li value="27">27</li>
                                                <li value="28">28</li>
                                                <li value="29">29</li>
                                                <li value="30">30</li>
                                                <li value="31">31</li>
                                              </ul>
                                            </div>
                                      </div>

                                        <div class="col-xs-4">
                                            <div class="form-group">
                                              <button class="btn btn-default dropdown-toggle input-content" type="button" data-toggle="dropdown">Year
                                                <span class="caret"></span></button>
                                                <ul class="dropdown-menu">
                                                  <li value="2017">2017</li>
                                                  <li value="2016">2016</li>
                                                  <li value="2015">2015</li>
                                                  <li value="2014">2014</li>
                                                  <li value="2013">2013</li>
                                                  <li value="2012">2012</li>
                                                  <li value="2011">2011</li>
                                                  <li value="2010">2010</li>
                                                  <li value="2009">2009</li>
                                                  <li value="2008">2008</li>
                                                  <li value="2007">2007</li>
                                                  <li value="2006">2006</li>
                                                  <li value="2005">2005</li>
                                                  <li value="2004">2004</li>
                                                  <li value="2003">2003</li>
                                                  <li value="2002">2002</li>
                                                  <li value="2001">2001</li>
                                                  <li value="2000">2000</li>
                                                  <li value="1999">1999</li>
                                                  <li value="1998">1998</li>
                                                  <li value="1997">1997</li>
                                                  <li value="1996">1996</li>
                                                  <li value="1995">1995</li>
                                                  <li value="1994">1994</li>
                                                  <li value="1993">1993</li>
                                                  <li value="1992">1992</li>
                                                  <li value="1991">1991</li>
                                                  <li value="1990">1990</li>
                                                  <li value="1989">1989</li>
                                                  <li value="1988">1988</li>
                                                  <li value="1987">1987</li>
                                                  <li value="1986">1986</li>
                                                  <li value="1985">1985</li>
                                                  <li value="1984">1984</li>
                                                  <li value="1983">1983</li>
                                                  <li value="1982">1982</li>
                                                  <li value="1981">1981</li>
                                                  <li value="1980">1980</li>
                                                  <li value="1979">1979</li>
                                                  <li value="1978">1978</li>
                                                  <li value="1977">1977</li>
                                                  <li value="1976">1976</li>
                                                  <li value="1975">1975</li>
                                                  <li value="1974">1974</li>
                                                  <li value="1973">1973</li>
                                                  <li value="1972">1972</li>
                                                  <li value="1971">1971</li>
                                                  <li value="1970">1970</li>
                                                  <li value="1969">1969</li>
                                                  <li value="1968">1968</li>
                                                  <li value="1967">1967</li>
                                                  <li value="1966">1966</li>
                                                  <li value="1965">1965</li>
                                                  <li value="1964">1964</li>
                                                  <li value="1963">1963</li>
                                                  <li value="1962">1962</li>
                                                  <li value="1961">1961</li>
                                                  <li value="1960">1960</li>
                                                  <li value="1959">1959</li>
                                                  <li value="1958">1958</li>
                                                  <li value="1957">1957</li>
                                                  <li value="1956">1956</li>
                                                  <li value="1955">1955</li>
                                                  <li value="1954">1954</li>
                                                  <li value="1953">1953</li>
                                                  <li value="1952">1952</li>
                                                  <li value="1951">1951</li>
                                                  <li value="1950">1950</li>
                                                  <li value="1949">1949</li>
                                                  <li value="1948">1948</li>
                                                  <li value="1947">1947</li>
                                                  <li value="1946">1946</li>
                                                  <li value="1945">1945</li>
                                                  <li value="1944">1944</li>
                                                  <li value="1943">1943</li>
                                                  <li value="1942">1942</li>
                                                  <li value="1941">1941</li>
                                                  <li value="1940">1940</li>
                                                  <li value="1939">1939</li>
                                                  <li value="1938">1938</li>
                                                  <li value="1937">1937</li>
                                                  <li value="1936">1936</li>
                                                  <li value="1935">1935</li>
                                                  <li value="1934">1934</li>
                                                  <li value="1933">1933</li>
                                                  <li value="1932">1932</li>
                                                  <li value="1931">1931</li>
                                                  <li value="1930">1930</li>
                                                  <li value="1929">1929</li>
                                                  <li value="1928">1928</li>
                                                  <li value="1927">1927</li>
                                                  <li value="1926">1926</li>
                                                  <li value="1925">1925</li>
                                                  <li value="1924">1924</li>
                                                  <li value="1923">1923</li>
                                                  <li value="1922">1922</li>
                                                  <li value="1921">1921</li>
                                                  <li value="1920">1920</li>
                                                  <li value="1919">1919</li>
                                                  <li value="1918">1918</li>
                                                  <li value="1917">1917</li>
                                                  <li value="1916">1916</li>
                                                  <li value="1915">1915</li>
                                                  <li value="1914">1914</li>
                                                  <li value="1913">1913</li>
                                                  <li value="1912">1912</li>
                                                  <li value="1911">1911</li>
                                                  <li value="1910">1910</li>
                                                  <li value="1909">1909</li>
                                                  <li value="1908">1908</li>
                                                  <li value="1907">1907</li>
                                                  <li value="1906">1906</li>
                                                  <li value="1905">1905</li>
                                                  <li value="1904">1904</li>
                                                  <li value="1903">1903</li>
                                                  <li value="1902">1902</li>
                                                  <li value="1901">1901</li>
                                                  <li value="1900">1900</li>
                                                  <li value="1899">1899</li>
                                                  <li value="1898">1898</li>
                                                  <li value="1897">1897</li>
                                                </ul>
                                              </div>
                                        </div>
                                      </div>
                                      <span class="checkbox filter-facilities"style="text-align:justify;padding-bottom:10px;">
                                          <input type="checkbox" id="terms" style="margin-left:0px;">
                                          <label for="terms" class="filter-label" style="display:inline;">Check here to indicate that you have read and agree to the terms of the <a href="#">Juanouting Customer Agreement</a></label>
                                        </span>
                                      <button class="btn btn-primary btn-lg btn-block login-button" type="button" style="padding:0px;width:100%;margin-bottom:20px;">Sign Up</button>

                              </div>
                              <div>


                              </div>
                    			</div>
        		    		    <div class="modal-footer">
                                    <div class="col-md-12">
                                      <center>  Have an account already? <button  data-dismiss="modal" data-toggle="modal" data-target="#loginModal"  id="register_login_btn" type="button" class="btn btn-link" >Log In here</button></center>

                                    </div>
        		    		    </div>
                        </form>
                        <!-- End | Register Form -->

                    </div>
                    <!-- End # DIV Form -->

                  </div>
    			</div>
    		</div>
    <!-- End Modal Register -->
