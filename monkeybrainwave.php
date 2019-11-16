<?php

class UptimeCheckFailureException extends Exception {}

class MonkeyBrainWave {

  private $api = '';
  private $warn = 4;
  private $down = 9;

  public function __construct() {
    $this->load_config();
  }

  function load_config($configFile = './config.json') {
    $jsonConfig = file_get_contents($configFile);
    $config = json_decode($jsonConfig, true);

    if (isset($config['api'])) {
      $this->api = $config['api'];
    }

    if (isset($config['warn']) && is_int($config['warn'])) {
      $this->warn = $config['warn'];
    }

    if (isset($config['outage']) && is_int($config['outage'])) {
      $this->outage = $config['outage'];
    }
  }

  function curl_get($url) {
    $c = curl_init();
    curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($c, CURLOPT_URL, $url);
    $contents = curl_exec($c);
    curl_close($c);

    if ($contents) {
      return $contents;
    } else {
      return false;
    }
  }

  function fetch_status() {
    $data = $this->curl_get($this->api);
    $status = json_decode($data, true);

    if ($status !== NULL) {
      return $status;
    }

    throw new UptimeCheckFailureException("⚠️ Unable to fetch uptime status; no valid data returned from Monkeybrians API");
  }

  function check_neighborhood($neighborhood) {
    $current_status = $this->fetch_status();
    $outages = 0;

    if (!isset($current_status[$neighborhood])) {
      throw new UptimeCheckFailureException("⚠️ There is no outage information $neighborhood. Check spelling and case.");
    }

    if (isset($current_status[$neighborhood]['outage'])) {
      $outages = ($current_status[$neighborhood]['outage']);
    }

    if ($outages > $this->down) {
      throw new UptimeCheckFailureException("🙈 Likely internet service interruption: $neighborhood currently has $outages Monkeybrains outages");
    }

    if ($outages > $this->warn) {
      throw new UptimeCheckFailureException("🙊 Possible internet service disruption: $neighborhood currently has $outages Monkeybrains outages");
    }
    return true;
  }

}
