<?php    
/*
*Verion History
* 1.00 - Initial Version.
* 1.01 - Added Blog Entry Page Type and centralized header content into the Header.php file.
* 1.02 - Added a Conditional Statement that adds 50px of Space to the Top of the Theme while logged in as an Administrator so the Edit Toolbar doesn't Overlap the Top of the Theme.
*/
defined('C5_EXECUTE') or die(_("Access Denied."));

class Cannonf700GrungeColumnsPackage extends Package {

	protected $pkgHandle = 'cannonf700_grunge_columns';
	protected $appVersionRequired = '5.3.0';
	protected $pkgVersion = '1.02';
	
	public function getPackageDescription() {
		return t("Grunge Column theme by www.rynomediaonline.com");
	}
	
	public function getPackageName() {
		return t("Grunge Columns");
	}
	
	public function install() {
		$pkg = parent::install();
		
		// install block		
		PageTheme::add('grunge_columns', $pkg);		 
	}




}