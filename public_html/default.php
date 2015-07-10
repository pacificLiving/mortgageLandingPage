<!DOCTYPE html>
<html>
    
    <!--
    
    GitHub documentation: https://github.com/pacificLiving/mortgageLandingPage/tree/master/public_html
    
    -Kyle Corbelli
    
    -->
    
    <?PHP
        include 'include/head.php';
        include 'include/connection.php';
    ?>
    <body>
        <div id='page-wrapper' class='container-fluid'>
            <div class='row'>
                <div class='col-sm-4 col-sm-push-4'>
                    <div class='well'>
                        <div> <!-- Mortgage Goal Input -->
                            <h2>Your Mortgage Goal:</h2>
                            <h4>(Check all that apply)</h4>
                            <div class='row checkbox'>
                                <div class='col-sm-6'>
                                    <label>
                                        <input name='refinanceReason' type='checkbox' value='Lower-Monthly-Payment' /> Lower Monthly Payment
                                    </label>
                                </div>
                                <div class='col-sm-6'>
                                    <label>
                                        <input name='refinanceReason' type='checkbox' value='Debt-Consolidation' /> Debt Consolidation
                                    </label>
                                </div>
                            </div>
                            <div class='row checkbox'>
                                <div class='col-sm-6'>
                                    <label>
                                        <input name='refinanceReason' type='checkbox' value='Shorten-Loan-Term' /> Shorten Loan Term
                                    </label>
                                </div>
                                <div class='col-sm-6'>
                                    <label>
                                        <input name='refinanceReason' type='checkbox' value='Cash-Out-Refinance' /> Cash Out Refinance
                                    </label>
                                </div>
                            </div>
                        </div> <!-- END Mortgage Goal Input -->
                        <div> <!-- Property Type Input -->
                            <h2>Property Type:</h2>
                            <div class='row'>
                                <select class='form-control'>
                                    <option hidden disable selected>-Select One-</option>
                                    <option value='Single-Family-Detached-House'>Single-Family Detached House</option>
                                    <option value='Condominium'>Condominium</option>
                                    <option value='Townhouse'>Townhouse</option>
                                    <option value='Multi-Family-Building'>Multi-Family Building</option>
                                    <option value='Land-Lot'>Land / Lot</option>
                                </select>
                            </div>
                        </div> <!-- END Property Type Input -->
                        <div> <!-- Occupancy Input -->
                            <h2>Occupancy Type:</h2>
                            <div class='row'>
                                <select class='form-control'>
                                    <option hidden disable selected>-Select One-</option>
                                    <option value='Owner-Occupied'>Owner-Occupied</option>
                                    <option value='Vacation-Second-Home'>Vacation / Second Home</option>
                                    <option value='Income-Investment-Property'>Income / Investment Property</option>
                                </select>
                            </div>
                        </div> <!-- END Occupancy Input -->
                        <div class='form-group'> <!-- Property Value Input -->
                            <label for='Property-Value'><h2>Estimated Property Value:</h2></label>
                            <input id='Property-Value' class='form-control' type='number' name='Property-Value'/>
                        </div> <!-- END Property Value Input -->
                        <div class='form-group'> <!-- Mortgage Balance Input -->
                            <label for='Loan-Balance'><h2>Approximate Mortgage Balance:</h2></label>
                            <input class='form-control' type='number' id='Loan-Balance' name='Loan-Balance'/>
                        </div> <!-- END Mortgage Balance Input -->
                        <div class='form-group'> <!-- Cash Out Input -->
                            <label for='Cash-Out'><h2>Desired Cash Out</h2></label>
                            <input id='Cash-Out' class='form-control' type='number' name='Cash-Out'/>
                        </div> <!-- END Cash Out Input -->
                        <div class='form-group'> <!-- Current Rate Input -->
                            <label>
                                <h2>First Mortgage Interest Rate</h2>
                                <input class='form-control' type='number' name='First-Mortgage-Rate'/>
                            </label>
                        </div> <!-- ENDCurrent Rate Input -->
                        <div> <!-- VA Eligibility Input -->
                            <h2>Are You a Veteran?</h2>
                            <div class='form-group'>
                                <div class='radio'>
                                    <label>
                                        <input type='radio' name='VA-Eligible' value='Yes' /> Yes
                                    </label>
                                </div>
                                <div class='radio'>
                                    <label>
                                        <input type='radio' name='VA-Eligible' value='No' /> No
                                    </label>
                                </div>
                            </div>
                        </div> <!-- END VA Eligibility Input -->
                        <div> <!-- Credit Input -->
                            <h2>How is Your Credit?</h2>
                            <div class='row'>
                                <select class='form-control'>
                                    <option hidden disable selected>-Select One-</option>
                                    <option value='Excellent-720-or-Above'>Excellent (720 or Above)</option>
                                    <option value='Good-660-719'>Good (660 - 719)</option>
                                    <option value='Average-620-659'>Average (620 - 659)</option>
                                    <option value='Below-Average-580-619'>Below Average (580 - 619)</option>
                                    <option value='Poor-579-and-Below'>Poor (579 and Below)</option>
                                </select>
                            </div>
                        </div> <!-- END Credit Input -->
                        <div> <!-- First Name Input -->
                            <label>
                                <h2>First Name:</h2>
                                <input class='form-control' type='text' name='First-Name' />
                            </label>
                        </div> <!-- END First Name Input -->
                        <div> <!-- Last Name Input -->
                            <label>
                                <h2>Last Name:</h2>
                                <input class='form-control' type='text' name='Last-Name' />
                            </label>
                        </div> <!-- END Last Name Input -->
                        <div> <!-- Email Input -->
                            <label>
                                <h2>Email:</h2>
                                <input class='form-control' type='email' name='Email' />
                            </label>
                        </div> <!-- END Email Input -->
                        <div> <!-- Phone Input -->
                            <label>
                                <h2>Phone:</h2>
                                <input class='form-control' type='tel' name='Phone' />
                            </label>
                        </div> <!-- END Phone Input -->
                    </div> <!-- END Well that holds all inputs -->
                </div>
            </div>
        </div>
        <?PHP
            include 'include/footer.php';
        ?>
    </body>
</html>
