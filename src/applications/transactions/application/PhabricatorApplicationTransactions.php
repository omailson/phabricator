<?php

final class PhabricatorApplicationTransactions extends PhabricatorApplication {

  public function shouldAppearInLaunchView() {
    return false;
  }

  public function getRoutes() {
    return array(
    );
  }

}
