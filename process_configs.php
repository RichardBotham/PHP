<head>
<title>Config Build Output</title>
</head>

<body>
<HR WIDTH="40%" ALIGN="LEFT" NOSHADE>
<h2><font size="3" color="darkgrey" face="consolas">
<p>Here is the config you submitted:</p>
</font></h2>
<HR WIDTH="40%" ALIGN="LEFT" NOSHADE>


<dl>
<font size="2.5" color="black" face="consolas">
	<dt>LSP Description</dt><dd><?php echo $_POST["lsp_description"]?></dd>
	<dt>HOP Count</dt><dd><?php echo $_POST["hop_count"]?></dd>
	<dt>Virtual Circuit</dt><dd><?php echo $_POST["vc_id"]?></dd>
	<dt>Vlan ID</dt><dd><?php echo $_POST["vlan_id"]?></dd>
	<dt>Ingress LSP Hostname</dt><dd><?php echo $_POST["ingress_lsp_hostname"]?></dd>
	<dt>Egress LSP Hostname</dt><dd><?php echo $_POST["egress_lsp_hostname"]?></dd>
	<dt>Ingress LSP Name</dt><dd><?php echo $_POST["ingress_lsp_name"]?></dd>
	<dt>Egress LSP Name</dt><dd><?php echo $_POST["egress_lsp_name"]?></dd>

	
<font>
</dl>



$ingress_lsp_hostname = filter_input(INPUT_POST,"ingress_lsp_hostname");
$egress_mpls_endpoint_hostname = filter_input(INPUT_POST, "egress_mpls_endpoint_hostname");
$ingress_mpls_lsp_name = filter_input(INPUT_POST,"ingress_mpls_lsp_name");
$egress_mpls_lsp_name = filter_input(INPUT_POST,"egress_mpls_lsp_name");
$ingress_mpls_vlan_ccc_interface = filter_input(INPUT_POST,"ingress_mpls_vlan_ccc_interface");
$egress_mpls_vlan_ccc_interface  = filter_input(INPUT_POST,"egress_mpls_vlan_ccc_interface");
$ingress_mpls_psn_endpoint  = filter_input(INPUT_POST,"ingress_mpls_psn_endpoint");
$egress_mpls_psn_endpoint  = filter_input(INPUT_POST,"egress_mpls_psn_endpoint");
$ingress_mpls_lsp_l2cct_neighbor  = filter_input(INPUT_POST,"ingress_mpls_lsp_l2cct_neighbor");
$egress_mpls_lsp_l2cct_neighbor  = filter_input(INPUT_POST,"egress_mpls_lsp_l2cct_neighbor");
$mpls_vc_id  = filter_input(INPUT_POST,"mpls_vc_id"); 
$mpls_vlan_id  = filter_input(INPUT_POST,"mpls_vlan_id");
$mpls_lsp_vlan_ccc_desc  = filter_input(INPUT_POST,"mpls_lsp_vlan_ccc_desc");
$mpls_lsp_policer_name  = filter_input(INPUT_POST,"mpls_lsp_policer_name");
$mpls_hop_limit = filter_input(INPUT_POST,"mpls_hop_limit");
$ingress_mpls_lsp_next_hops  = filter_input(INPUT_POST,"ingress_mpls_lsp_next_hops");
$egress_mpls_lsp_next_hops = filter_input(INPUT_POST,"egress_mpls_lsp_next_hops");
$datacentres  = filter_input(INPUT_POST,"datacentres");



<?php
/*
if(isset($_POST['ingress_lsp_hostname'])) {
    $data = $_POST['ingress_lsp_hostname'] . "\n";
    $ret = file_put_contents('/tmp/mytest.txt', $data, LOCK_EX);
    if($ret === false) {
        die("There was an error writing this file");
    }
    else {
        echo "$ret bytes written to file";
    }
}
else {
   die('no post data to process');
}   
*/

	$ingress_lsp_hostname = $_POST['ingress_lsp_hostname'] . "\n";
	$egress_lsp_hostname = $_POST['ingress_lsp_hostname'];
	$egress_mpls_endpoint_hostname   $_POST['egress_mpls_endpoint_hostname'];
	$ingress_mpls_lsp_name = $_POST['ingress_mpls_lsp_name'];
	$egress_mpls_lsp_name = $_POST['egress_mpls_lsp_name'];
	$ingress_mpls_vlan_ccc_interface = $_POST['ingress_mpls_vlan_ccc_interface'];
	$egress_mpls_vlan_ccc_interface = $_POST['egress_mpls_vlan_ccc_interface'];
	$ingress_mpls_psn_endpoint = $_POST['ingress_mpls_psn_endpoint'];
	$egress_mpls_psn_endpoint = $_POST['egress_mpls_psn_endpoint'];
	$ingress_mpls_lsp_l2cct_neighbor = $_POST['ingress_mpls_lsp_l2cct_neighbor'];
	$egress_mpls_lsp_l2cct_neighbor = $_POST['egress_mpls_lsp_l2cct_neighbor'];
	$mpls_vc_id = $_POST['mpls_vc_id']; 
	$mpls_vlan_id = $_POST['mpls_vlan_id'];
	$mpls_lsp_vlan_ccc_desc = $_POST['mpls_lsp_vlan_ccc_desc'];
	$mpls_lsp_policer_name = $_POST['mpls_lsp_policer_name'];
	$mpls_hop_limit = $_POST['mpls_hop_limit'];
	$ingress_mpls_lsp_next_hops = $_POST['ingress_mpls_lsp_next_hops'];
	$egress_mpls_lsp_next_hops = $_POST['egress_mpls_lsp_next_hops'];
	$datacentres = $_POST['datacentres'];



    /*$data = $_POST['ingress_lsp_hostname'] . "\n";*/
    $data1 = $_POST['egress_lsp_hostname'] . "\n";
    $data3 = $ingress_lsp_hostname . $data1;
    $ret = file_put_contents('/tmp/mytest.txt', $data3, LOCK_EX);


?>

</body>
</html>

