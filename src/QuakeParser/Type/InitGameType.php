<?php
namespace CC\QuakeParser\Type;

/**
 *
 * @author Yme-Jan Iedema <yj.iedema@coffeecup-studios.nl>
 */
class InitGameType extends Type
{

    private $result = [];

    protected function parse($data)
    {
        $data = explode("\\", $data);
        $result = [];
        for ($i = 0; $i < sizeof($data); $i += 2) {
            $this->result[$data[$i]] = $data[$i + 1];
        }
    }

    public function getDmflags()
    {
        return $this->result['dmflags'];
    }

    public function getFraglimit()
    {
        return $this->result['fraglimit'];
    }

    public function getTimelimit()
    {
        return $result['timelimit'];
    }

    public function getHostname()
    {
        return $this->result['sv_hostname'];
    }

    public function getSvMaxClients()
    {
        return $this->result['sv_maxclients'];
    }

    public function getSvMinRate()
    {
        return $this->result['sv_minRate'];
    }

    public function getSvMaxRate()
    {
        return $this->result['sv_maxRate'];
    }

    public function getSvDlRate()
    {
        return $this->result['sv_dlRate'];
    }

    public function getCapturelimit()
    {
        return $this->result['capturelimit'];
    }

    public function getSvPure()
    {
        return $this->result['sv_pure'];
    }

    public function getSvAllowDownload()
    {
        return $this->result['sv_allowDownload'];
    }

    public function getRoundlimit()
    {
        return $this->result['roundlimit'];
    }

    public function getSvPunkbuster()
    {
        return $this->result['sv_punkbuster'];
    }

    public function getGRedTeam()
    {
        return $this->result['g_redTeam'];
    }

    public function getGBlueTeam()
    {
        return $this->result['g_blueTeam'];
    }

    public function getVersion()
    {
        return $this->result['version'];
    }

    public function getComGamename()
    {
        return $this->result['com_gamename'];
    }

    public function getComProtocol()
    {
        return $this->result['com_protocol'];
    }

    public function getGGametype()
    {
        return $this->result['g_gametype'];
    }

    public function getMapname()
    {
        return $this->result['mapname'];
    }

    public function getGamename()
    {
        return $this->result['gamename'];
    }

    public function getGNeedpass()
    {
        return $this->result['g_needpass'];
    }

    public function getXpVersion()
    {
        return $this->result['xp_version'];
    }

    public function getXpDate()
    {
        return $this->result['xp_date'];
    }

    public function getUptime()
    {
        return $this->result['Uptime'];
    }
}
