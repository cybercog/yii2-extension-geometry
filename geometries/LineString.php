<?php
/**
 * Created by:  Itella Connexions ©
 * Created at:  14:57 11.03.15
 * Developer:   Pavel Kondratenko
 * Contact:     gustarus@gmail.com
 */

namespace webulla\extensions\geometry\geometries;

use webulla\extensions\geometry\base\Collection;
use yii\base\Exception;

class LineString extends Collection {

	/**
	 * @inheritdoc
	 */
	protected $geometry_type = 'LINESTRING';


	/**
	 * @param \webulla\extensions\geometry\base\Geometry[] $components
	 * @throws \yii\base\Exception
	 */
	public function setComponents($components) {
		if(count($components)) {
			parent::setComponents($components);
		} else {
			throw new Exception('Linestring with less than two points');
		}
	}
}