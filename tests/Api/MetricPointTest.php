<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Cachet\Api;

use Carbon\Carbon;

/**
 * This is the metric point test class.
 *
 * @author James Brooks <james@alt-three.com>
 * @author Graham Campbell <graham@alt-three.com>
 */
class MetricPointTest extends AbstractApiTestCase
{
    public function testGetMetricPoint()
    {
        $metric = factory('CachetHQ\Cachet\Models\Metric')->create();
        $metricPoint = factory('CachetHQ\Cachet\Models\MetricPoint', 3)->create([
            'metric_id' => $metric->id,
        ]);

        $this->get("/api/v1/metrics/{$metric->id}/points");

        $this->seeJsonContains(['id' => $metricPoint[0]->id]);
        $this->seeJsonContains(['id' => $metricPoint[1]->id]);
        $this->seeJsonContains(['id' => $metricPoint[2]->id]);

        $this->assertResponseOk();
    }

    public function testPostMetricPointUnauthorized()
    {
        $metric = factory('CachetHQ\Cachet\Models\Metric')->create();
        $metricPoint = factory('CachetHQ\Cachet\Models\MetricPoint')->create([
            'metric_id' => $metric->id,
        ]);
        $this->post("/api/v1/metrics/{$metric->id}/points");

        $this->assertResponseStatus(401);
    }

    public function testPostMetricPoint()
    {
        $this->beUser();

        $metric = factory('CachetHQ\Cachet\Models\Metric')->create();
        $metricPoint = factory('CachetHQ\Cachet\Models\MetricPoint')->make([
            'metric_id' => $metric->id,
        ]);

        $this->post("/api/v1/metrics/{$metric->id}/points", $metricPoint->toArray());

        $this->seeJsonContains(['value' => $metricPoint->value]);

        $this->assertResponseOk();
    }

    public function testPostMetricPointTimestamp()
    {
        $this->beUser();

        $metric = factory('CachetHQ\Cachet\Models\Metric')->create();
        $timestamp = 1434369116;
        $metricPoint = factory('CachetHQ\Cachet\Models\MetricPoint')->make([
            'metric_id' => $metric->id,
        ]);
        $postData = $metricPoint->toArray();
        $postData['timestamp'] = $timestamp;

        $this->post("/api/v1/metrics/{$metric->id}/points", $postData);

        $this->seeJsonContains([
            'value'      => $metricPoint->value,
            'created_at' => date('Y-m-d H:i:s', 1434369116),
        ]);

        $this->assertResponseOk();
    }

    public function testPostMetricPointTimestampTimezone()
    {
        $this->beUser();

        // prevent tests breaking due to rolling into the next second
        Carbon::setTestNow(Carbon::now());

        $timezone = 'America/Mexico_City';
        $metric = factory('CachetHQ\Cachet\Models\Metric')->create();
        $datetime = Carbon::now()->timezone($timezone);
        $metricPoint = factory('CachetHQ\Cachet\Models\MetricPoint')->make([
            'metric_id' => $metric->id,
        ]);
        $postData = $metricPoint->toArray();
        $postData['timestamp'] = $datetime->timestamp;

        $this->post("/api/v1/metrics/{$metric->id}/points", $postData, ['Time-Zone' => $timezone]);

        $this->seeJsonContains(['value' => $metricPoint->value, 'created_at' => $datetime->toDateTimeString()]);

        $this->assertResponseOk();
    }

    public function testPutMetricPoint()
    {
        $this->beUser();
        $metric = factory('CachetHQ\Cachet\Models\Metric')->create();
        $metricPoint = factory('CachetHQ\Cachet\Models\MetricPoint')->create([
            'metric_id' => $metric->id,
        ]);

        $this->put("/api/v1/metrics/{$metric->id}/points/{$metricPoint->id}", [
            'value' => 999,
        ]);

        $this->seeJsonContains(['value' => 999]);

        $this->assertResponseOk();
    }

    public function testDeleteMetricPoint()
    {
        $this->beUser();
        $metric = factory('CachetHQ\Cachet\Models\Metric')->create();
        $metricPoint = factory('CachetHQ\Cachet\Models\MetricPoint')->create([
            'metric_id' => $metric->id,
        ]);

        $this->delete("/api/v1/metrics/{$metric->id}/points/{$metricPoint->id}");

        $this->assertResponseStatus(204);
    }
}
