<?php      

defined('C5_EXECUTE') or die(_("Access Denied."));

class BurnedPackage extends Package {

	protected $pkgHandle = 'burned';
	protected $appVersionRequired = '5.1';
	protected $pkgVersion = '1.0';
	
	public function getPackageDescription() {
		return t("Installs Burned theme");
	}
	
	public function getPackageName() {
		return t("Burned");
	}
	
	public function install() {
		$pkg = parent::install();
		
		// install block		
		PageTheme::add('burned', $pkg);		
	}




}