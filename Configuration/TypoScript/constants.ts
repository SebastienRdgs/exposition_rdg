
plugin.tx_expositionrdg_p1 {
  view {
    # cat=plugin.tx_expositionrdg_p1/file; type=string; label=Path to template root (FE)
    templateRootPath = EXT:exposition_rdg/Resources/Private/Templates/
    # cat=plugin.tx_expositionrdg_p1/file; type=string; label=Path to template partials (FE)
    partialRootPath = EXT:exposition_rdg/Resources/Private/Partials/
    # cat=plugin.tx_expositionrdg_p1/file; type=string; label=Path to template layouts (FE)
    layoutRootPath = EXT:exposition_rdg/Resources/Private/Layouts/
  }
  persistence {
    # cat=plugin.tx_expositionrdg_p1//a; type=string; label=Default storage PID
    storagePid =
  }
}
