<?php
  use RDG\ExpositionRdg\Domain\Model\Oeuvres;

	$GLOBALS['TCA']['tx_expositionrdg_domain_model_oeuvres']['columns']['type']['config']['items'] = [
    ["Peinture aquarelle", Oeuvres::TYPE_PEINTURE_AQUARELLE],
    ["Peinture à l'huile", Oeuvres::TYPE_PEINTURE_HUILE],
    ["Peinture à l'encre", Oeuvres::TYPE_PEINTURE_ENCRE],
    ["Gravure", Oeuvres::TYPE_GRAVURE],
    ["Dessin", Oeuvres::TYPE_DESSIN],
    ["Sculpture", Oeuvres::TYPE_SCULPTURE],
    ["Photographie", Oeuvres::TYPE_PHOTO],
    ["Street art", Oeuvres::TYPE_STREET_ART]
	];
