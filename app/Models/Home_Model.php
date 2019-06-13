<?php
/**
 * This file is part of the Chatomz PHP Framework package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author         Firman Setiawan
 * @copyright      Copyright (c) Firman Setiawan
 */

// -------------------------------------------------------------------------------------------------

namespace app\Models;

use app\Core\ModelClass;

class Home extends ModelClass
{
	public function datadiri()
	{
		$diri['nama'] = 'Ananda Sholihatun Nisa';
		$diri['kelas'] = 'XI RPL 2';
		$diri['sekolah'] = 'SMK Daarul Abroor';

		return $diri;
	}

	public function listkategori()
	{
		$this->_db->table('data_kategori');
		return $this->_db->fetch();
	}
}