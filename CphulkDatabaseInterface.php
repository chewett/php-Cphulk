<?php

interface CphulkDatabaseInterface
{

    public function deleteWhitelistByIp($ipAddress);
    public function deleteWhitelistByComment($comment);

    public function addWhitelist($ip, $comment=null);

    public function changeIpForWhitelistComment($comment, $newIp);

    public function deleteBlacklistByIp($ipAddress);
    public function deleteBlacklistByComment($comment);

    public function addBlacklist($ip, $comment=null);

    public function changeIpForBlacklistComment($comment, $newIp);
    
}