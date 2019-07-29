<?php
/**
 * This file is part of the Elastic App Search PHP Client package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Elastic\AppSearch\Client\Endpoint;

/**
 * Implementation of the GetSynonymSet endpoint.
 *
 * @package Elastic\AppSearch\Client\Endpoint
 */
class GetSynonymSet extends \Elastic\OpenApi\Codegen\Endpoint\AbstractEndpoint
{
    // phpcs:disable
    /**
     * @var string
     */
    protected $method = 'GET';

    /**
     * @var string
     */
    protected $uri = '/engines/{engine_name}/synonyms/{synonym_set_id}';

    protected $routeParams = ['engine_name', 'synonym_set_id'];
    // phpcs:enable
}
