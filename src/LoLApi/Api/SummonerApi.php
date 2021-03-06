<?php

namespace LoLApi\Api;

use LoLApi\Result\ApiResult;

/**
 * Class SummonerApi
 *
 * @package LoLApi\Api
 * @see     https://developer.riotgames.com/api-methods/
 */
class SummonerApi extends BaseApi
{
    const API_URL_SUMMONER_BY_NAME = '/lol/summoner/v4/summoners/by-name/{summonerName}';
    const API_URL_SUMMONER_BY_ID = '/lol/summoner/v4/summoners/{encryptedSummonerId}';
    const API_URL_SUMMONER_BY_ACCOUNT_ID = '/lol/summoner/v4/summoners/by-account/{encryptedAccountId}';

    /**
     * @param string $summonerName
     *
     * @return ApiResult
     */
    public function getSummonerBySummonerName($summonerName)
    {
        $url = str_replace('{summonerName}', $summonerName, self::API_URL_SUMMONER_BY_NAME);

        return $this->callApiUrl($url, []);
    }

    /**
     * @param string $summonerId
     *
     * @return ApiResult
     */
    public function getSummonerBySummonerId($encryptedSummonerId)
    {
        $url = str_replace('{encryptedSummonerId}', $encryptedSummonerId, self::API_URL_SUMMONER_BY_ID);

        return $this->callApiUrl($url, []);
    }

    /**
     * @param string $accountId
     *
     * @return ApiResult
     */
    public function getSummonerByAccountId($encryptedAccountId)
    {
        $url = str_replace('{encryptedAccountId}', $encryptedAccountId, self::API_URL_SUMMONER_BY_ACCOUNT_ID);

        return $this->callApiUrl($url, []);
    }
}
