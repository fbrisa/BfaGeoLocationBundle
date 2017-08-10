<?php

namespace Bfa\GeoLocationBundle\Form\Type;

class LeafletMap extends Symfony\Component\Form\AbstractType {

	public function setDefaultOptions(OptionsResolverInterface $resolver) {
		$resolver->setDefaults(array(
//            'class' => 'form-control'
		));
	}

	public function buildView(FormView $view, FormInterface $form, array $options) {
//        $view->vars['ibPass'] = 'passata';
	}

	public function getParent() {
		return 'text';
	}

	public function getName() {
		return 'leafletmap';
	}

}
