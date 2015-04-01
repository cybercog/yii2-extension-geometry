<?php
/**
 * Created by:  Itella Connexions ©
 * Created at:  14:58 11.03.15
 * Developer:   Pavel Kondratenko
 * Contact:     gustarus@gmail.com
 */

namespace webulla\components\geometry\geometries;

use webulla\components\geometry\base\Collection;

class MultiLineString extends Collection {

	/**
	 * @inheritdoc
	 */
	protected $geometry_type = 'MULTILINESTRING';
}