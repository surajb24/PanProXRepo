<div id="response"></div>  

<div class="div_tab">
    
<div id="wrapper_tab">

	<div id="tabbox">

		<a href="#" id="Tab1" class="tab">Application</a>
		<a href="#" id="Tab2" class="tab two">Personal</a>
		<a href="#" id="Tab3" class="tab three">Contact</a>
		<a href="#" id="Tab4" class="tab four">Other</a>
		<a href="#" id="Tab5" class="tab five">RA</a>
		<a href="#" id="Tab6" class="tab six">Verification</a>
	<!---	<a href="#" id="Tab7" class="tab seven">KYC</a>  -->
	
		
              </div>

	<div id="panel">

		<?php
		
                    include 'crm/crm form/qc.app.form.inc.php';

                    include 'crm/crm form/qc.personal.form.inc.php';

                    include 'crm/crm form/qc.contact.form.inc.php';

                    include 'crm/crm form/qc.other.form.inc.php';

                    include 'crm/crm form/qc.ra.form.inc.php';

                    include 'crm/crm form/qc.verification.form.inc.php';
	
                  /*  include 'crm/crm form/qc.kyc.form.inc.php';*/
		?>

	</div>
        </div>
</div>

