
plugin.tx_expositionrdg_p1 {
  view {
    templateRootPaths.0 = EXT:exposition_rdg/Resources/Private/Templates/
    templateRootPaths.1 = {$plugin.tx_expositionrdg_p1.view.templateRootPath}
    partialRootPaths.0 = EXT:exposition_rdg/Resources/Private/Partials/
    partialRootPaths.1 = {$plugin.tx_expositionrdg_p1.view.partialRootPath}
    layoutRootPaths.0 = EXT:exposition_rdg/Resources/Private/Layouts/
    layoutRootPaths.1 = {$plugin.tx_expositionrdg_p1.view.layoutRootPath}
  }
  persistence {
    storagePid >
    #recursive = 1
  }
  features {
    #skipDefaultArguments = 1
  }
  mvc {
    #callDefaultActionIfActionCantBeResolved = 1
  }
}

plugin.tx_expositionrdg._CSS_DEFAULT_STYLE (
    textarea.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    input.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    .tx-exposition-rdg table {
        border-collapse:separate;
        border-spacing:10px;
    }

    .tx-exposition-rdg table th {
        font-weight:bold;
    }

    .tx-exposition-rdg table td {
        vertical-align:top;
    }

    .typo3-messages .message-error {
        color:red;
    }

    .typo3-messages .message-ok {
        color:green;
    }
)
