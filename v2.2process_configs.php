

<?php

echo '<script type="text/javascript">
          window.onload = function () { alert("Config Submitted"); }
</script>';

/*
Notes:
1) updated (a) ingress_mpls-hops (b) egress_mpls_ops (c) dccodes to ensure that if empty we dont write a '-' to the vairable line as this breaks ansible.


*/
 
    $mpls_lsp_vlan_ccc_desc = "mpls_lsp_vlan_ccc_desc: " . $_POST['mpls_lsp_vlan_ccc_desc'] . "\n";
    $mpls_hop_limit = "mpls_hop_limit: " . $_POST['mpls_hop_limit'] . "\n";

    $ingress_mpls_endpoint_hostname = "ingress_mpls_endpoint_hostname: " . $_POST['ingress_mpls_endpoint_hostname'] . "\n";
    $egress_mpls_endpoint_hostname = "egress_mpls_endpoint_hostname: " . $_POST['egress_mpls_endpoint_hostname'] . "\n";
	
	$ingress_mpls_lsp_name = "ingress_mpls_lsp_name: " . $_POST['ingress_mpls_lsp_name'] . "\n";
	$egress_mpls_lsp_name = "egress_mpls_lsp_name: " . $_POST['egress_mpls_lsp_name'] . "\n";

	$ingress_mpls_vlan_ccc_interface = "ingress_mpls_vlan_ccc_interface: " . $_POST['ingress_mpls_vlan_ccc_interface'] . "\n";
	$egress_mpls_vlan_ccc_interface =  "egress_mpls_vlan_ccc_interface: " . $_POST['egress_mpls_vlan_ccc_interface'] . "\n";

	$ingress_mpls_psn_endpoint = "ingress_mpls_psn_endpoint: " . $_POST['ingress_mpls_psn_endpoint'] . "\n";
	$egress_mpls_psn_endpoint = "egress_mpls_psn_endpoint: " . $_POST['egress_mpls_psn_endpoint'] . "\n";

	$ingress_mpls_lsp_l2cct_neighbor = "ingress_mpls_lsp_l2cct_neighbor: " . $_POST['ingress_mpls_lsp_l2cct_neighbor'] . "\n";
	$egress_mpls_lsp_l2cct_neighbor = "egress_mpls_lsp_l2cct_neighbor: " . $_POST['egress_mpls_lsp_l2cct_neighbor'] . "\n";

	$mpls_vc_id = "mpls_vc_id: " . $_POST['mpls_vc_id'] . "\n"; 
	$mpls_vlan_id = "mpls_vlan_id: " . $_POST['mpls_vlan_id'] . "\n";

	$mpls_lsp_vlan_ccc_desc = "mpls_lsp_vlan_ccc_desc: " . $_POST['mpls_lsp_vlan_ccc_desc'] . "\n";
	$mpls_lsp_policer_name = "mpls_lsp_policer_name: " . $_POST['mpls_lsp_policer_name'] . "\n";

/* Ingress hops*/	

	if ($_POST['ingress_mpls_hop1'] == NULL)
	{
	$ingress_mpls_hop1 = "";	
	}
	else {
	$ingress_mpls_hop1 = " - " . $_POST['ingress_mpls_hop1'] . "\n";
	}

	if ($_POST['ingress_mpls_hop2'] == NULL)
	{
	$ingress_mpls_hop2 = "";	
	}
	else {
	$ingress_mpls_hop2 = " - " . $_POST['ingress_mpls_hop2'] . "\n";
	}

	if ($_POST['ingress_mpls_hop3'] == NULL)
	{
	$ingress_mpls_hop3 = "";	
	}
	else {
	$ingress_mpls_hop3 = " - " . $_POST['ingress_mpls_hop3'] . "\n";
	}

	if ($_POST['ingress_mpls_hop4'] == NULL)
	{
	$ingress_mpls_hop4 = "";	
	}
	else {
	$ingress_mpls_hop4 = " - " . $_POST['ingress_mpls_hop4'] . "\n";
	}

	if ($_POST['ingress_mpls_hop5'] == NULL)
	{
	$ingress_mpls_hop5 = "";	
	}
	else {
	$ingress_mpls_hop5 = " - " . $_POST['ingress_mpls_hop5'] . "\n";
	}

	if ($_POST['ingress_mpls_hop6'] == NULL)
	{
	$ingress_mpls_hop6 = "";	
	}
	else {
	$ingress_mpls_hop6 = " - " . $_POST['ingress_mpls_hop6'] . "\n";
	}

	if ($_POST['ingress_mpls_hop7'] == NULL)
	{
	$ingress_mpls_hop7 = "";	
	}
	else {
	$ingress_mpls_hop7 = " - " . $_POST['ingress_mpls_hop7'] . "\n";
	}

	if ($_POST['ingress_mpls_hop8'] == NULL)
	{
	$ingress_mpls_hop8 = "";	
	}
	else {
	$ingress_mpls_hop8 = " - " . $_POST['ingress_mpls_hop8'] . "\n";
	}


/* Egress hops */

	if ($_POST['egress_mpls_hop1'] == NULL)
	{
	$egress_mpls_hop1 = "";	
	}
	else {
	$egress_mpls_hop1 = " - " . $_POST['egress_mpls_hop1'] . "\n";
	}

	if ($_POST['egress_mpls_hop2'] == NULL)
	{
	$egress_mpls_hop2 = "";	
	}
	else {
	$egress_mpls_hop2 = " - " . $_POST['egress_mpls_hop2'] . "\n";
	}

	if ($_POST['egress_mpls_hop3'] == NULL)
	{
	$egress_mpls_hop3 = "";	
	}
	else {
	$egress_mpls_hop3 = " - " . $_POST['egress_mpls_hop3'] . "\n";
	}

	if ($_POST['egress_mpls_hop4'] == NULL)
	{
	$egress_mpls_hop4 = "";	
	}
	else {
	$egress_mpls_hop4 = " - " . $_POST['egress_mpls_hop4'] . "\n";
	}

	if ($_POST['egress_mpls_hop5'] == NULL)
	{
	$egress_mpls_hop5 = "";	
	}
	else {
	$egress_mpls_hop5 = " - " . $_POST['egress_mpls_hop5'] . "\n";
	}

	if ($_POST['egress_mpls_hop6'] == NULL)
	{
	$egress_mpls_hop6 = "";	
	}
	else {
	$egress_mpls_hop6 = " - " . $_POST['egress_mpls_hop6'] . "\n";
	}

	if ($_POST['egress_mpls_hop7'] == NULL)
	{
	$egress_mpls_hop7 = "";	
	}
	else {
	$egress_mpls_hop7 = " - " . $_POST['egress_mpls_hop7'] . "\n";
	}

	if ($_POST['egress_mpls_hop8'] == NULL)
	{
	$egress_mpls_hop8 = "";	
	}
	else {
	$egress_mpls_hop8 = " - " . $_POST['egress_mpls_hop8'] . "\n";
	}

/* DC code here */

	if (empty($dccode1)) {
  	$dccode1 = $_POST['dccode1'] . "\n";
	}
	else {
	$dccode1 = "";
	}
	
	if (empty($dccode2)) {
	$dccode2 = $_POST['dccode2'] . "\n";
	}
	else {
	$dccode2 = "";
	}

	if (empty($dccode3)) {
	$dccode3 = $_POST['dccode3'] . "\n";
	}
	else {
	$dccode3 = "";	
	}

	if (empty($dccode4)) {
	$dccode4 = $_POST['dccode4'] . "\n";
	}
	else {
	$dccode4 = "";
	}

	if (empty($dccode5)) {
	$dccode5 = $_POST['dccode5'] . "\n";
	}
	else {
	$dccode5 = "";
	}

	if (empty($dccode6)) {
	$dccode6 = $_POST['dccode6'] . "\n";
	}
	else {
	$dccode6 = "";
	}

	if (empty($dccode7)) {
	$dccode7 = $_POST['dccode7'] . "\n";
	}
	else {
	$dccode7 = "";
	}
	
	if (empty($dccode8)) {
	$dccode8 = $_POST['dccode8'] . "\n";
	}
	else {
	$dccode8 = "";
	}

    $all_dcodes = "datacentres:" . "\n" . $dccode1 . $dccode2 . $dccode3 . $dccode4 . $dccode5 . $dccode6 . $dccode7 . $dccode8;

    $all_ingress_mpls_hops = "ingress_mpls_lsp_next_hops:" . "\n" . $ingress_mpls_hop1 . $ingress_mpls_hop2 . $ingress_mpls_hop3 . $ingress_mpls_hop4 . $ingress_mpls_hop5 . $ingress_mpls_hop6 . $ingress_mpls_hop7 . $ingress_mpls_hop8;

	$all_egress_mpls_hops = "egress_mpls_lsp_next_hops:" . "\n" . $egress_mpls_hop1 .$egress_mpls_hop2 . $egress_mpls_hop3 . $egress_mpls_hop4 . $egress_mpls_hop5 . $egress_mpls_hop6 .$egress_mpls_hop7 . $egress_mpls_hop8 ;

 
    $allofit = $ingress_mpls_endpoint_hostname . $egress_mpls_endpoint_hostname . $ingress_mpls_lsp_name . $egress_mpls_lsp_name . $ingress_mpls_vlan_ccc_interface . $egress_mpls_vlan_ccc_interface . $ingress_mpls_psn_endpoint . $egress_mpls_psn_endpoint . $ingress_mpls_lsp_l2cct_neighbor . $egress_mpls_lsp_l2cct_neighbor . $mpls_vc_id . $mpls_vlan_id . $mpls_lsp_vlan_ccc_desc . $mpls_lsp_policer_name . $mpls_hop_limit . $all_ingress_mpls_hops . $all_egress_mpls_hops . $all_dcodes;


    	$ret = file_put_contents('/usr/playbooks/ansible-lsp/roles/test1role/vars/mpls-lsp-vars-v3.yml', $allofit, LOCK_EX);


		$runplaybook = shell_exec('/usr/playbooks/ansible-lsp/ansible-playbook juniperlsp.yml -c - local');
		echo "<pre>$runplaybook</pre>";
	*/


  	/*$filecopy = shell_exec('cp mytext.yml /usr/playbook/mytets.yml');
	echo "<pre>$filecopy</pre>";
	*/
	
	


?>



	

