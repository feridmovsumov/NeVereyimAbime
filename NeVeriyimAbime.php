<?php

/**
 * Rastgele veri üreticisi
 * Abisi ne isterse onu verir.
 * @author Ferid Mövsümov
 */
class NeVeriyimAbime{
	
	/**
	 * Ver ordan $length uzunluğunda bir string
	 * @param int $length
	 * @return string
	 */
	public static function stringVer($length = 10)
	{
		$characters = '0123456789abcçdefgğhıijklmnoöpqrsştuüvwxyzABCÇDEFGĞHIİJKLMNOÖPQRSŞTUÜVWXYZ';
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, strlen($characters) - 1)];
		}
		return $randomString;
	}
	
}
