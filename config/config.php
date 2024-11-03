<?php

use Digitlimit\Githook\Events;
use Digitlimit\Githook\Http\Middleware\VerifySignatureMiddleware;
use Digitlimit\Githook\Http\Controllers\GithookController;

use App\Listeners\CommitCommentListener;
use App\Listeners\GenericListener;

return [
    /*
    |--------------------------------------------------------------------------
    | Debug Mode
    |--------------------------------------------------------------------------
    |
    | Dump the webhook payload to the log.
    |
    */

    'debug' => env('GITHOOK_DEBUG', false),

    /*
    |--------------------------------------------------------------------------
    | Github WebHook Secret
    |--------------------------------------------------------------------------
    |
    | Github webhook secret.
    |
    */

    'secret' => env('GITHOOK_SECRET', null),

    /*
    |--------------------------------------------------------------------------
    | Github WebHook URL
    |--------------------------------------------------------------------------
    |
    | Github webhook URL.
    |
    */

    'url' => env('GITHOOK_URL', '/githook'),

    /*
    |--------------------------------------------------------------------------
    | Github WebHook Callback Controller
    |--------------------------------------------------------------------------
    |
    | The controller to be called when the webhook is triggered.
    | This controller will dispatch the event.
    |
    */
    'controller' => GithookController::class,

    /*
    |--------------------------------------------------------------------------
    | Github WebHook Callback Middleware
    |--------------------------------------------------------------------------
    |
    | The middleware to be applied to the webhook route.
    | This middleware will validate the webhook signature.
    |
    */
    'middleware' => VerifySignatureMiddleware::class,

    /*
     |--------------------------------------------------------------------------
     | Github WebHook Events
     |--------------------------------------------------------------------------
     |
     | The mapping of Github webhook events to their respective event classes.
     |
     */
    'events' => [
        'branch_protection_configuration' => [
            'event' => Events\BranchProtectionConfiguration::class,
            'listeners' => [],
        ],
        'branch_protection_rule' => [
            'event' => Events\BranchProtectionRule::class,
            'listeners' => [],
        ],
        'check_run' => [
            'event' => Events\CheckRun::class,
            'listeners' => [],
        ],
        'check_suite' => [
            'event' => Events\CheckSuite::class,
            'listeners' => [],
        ],
        'code_scanning_alert' => [
            'event' => Events\CodeScanningAlert::class,
            'listeners' => [],
        ],
        'commit_comment' => [
            'event' => Events\CommitComment::class,
            'listeners' => [],
        ],
        'create' => [
            'event' => Events\Create::class,
            'listeners' => [],
        ],
        'custom_property' => [
            'event' => Events\CustomProperty::class,
            'listeners' => [],
        ],
        'custom_property_values' => [
            'event' => Events\CustomPropertyValues::class,
            'listeners' => [],
        ],
        'delete' => [
            'event' => Events\Delete::class,
            'listeners' => [],
        ],
        'dependabot_alert' => [
            'event' => Events\DependabotAlert::class,
            'listeners' => [],
        ],
        'deploy_key' => [
            'event' => Events\DeployKey::class,
            'listeners' => [],
        ],
        'deployment' => [
            'event' => Events\Deployment::class,
            'listeners' => [],
        ],
        'deployment_protection_rule' => [
            'event' => Events\DeploymentProtectionRule::class,
            'listeners' => [],
        ],
        'deployment_review' => [
            'event' => Events\DeploymentReview::class,
            'listeners' => [],
        ],
        'deployment_status' => [
            'event' => Events\DeploymentStatus::class,
            'listeners' => [],
        ],
        'discussion' => [
            'event' => Events\Discussion::class,
            'listeners' => [],
        ],
        'discussion_comment' => [
            'event' => Events\DiscussionComment::class,
            'listeners' => [],
        ],
        'fork' => [
            'event' => Events\Fork::class,
            'listeners' => [],
        ],
        'github_app_authorization' => [
            'event' => Events\GithubAppAuthorization::class,
            'listeners' => [],
        ],
        'gollum' => [
            'event' => Events\Gollum::class,
            'listeners' => [],
        ],
        'installation' => [
            'event' => Events\Installation::class,
            'listeners' => [],
        ],
        'installation_repositories' => [
            'event' => Events\InstallationRepositories::class,
            'listeners' => [],
        ],
        'installation_target' => [
            'event' => Events\InstallationTarget::class,
            'listeners' => [],
        ],
        'issue_comment' => [
            'event' => Events\IssueComment::class,
            'listeners' => [],
        ],
        'issues' => [
            'event' => Events\Issues::class,
            'listeners' => [],
        ],
        'label' => [
            'event' => Events\Label::class,
            'listeners' => [],
        ],
        'marketplace_purchase' => [
            'event' => Events\MarketplacePurchase::class,
            'listeners' => [],
        ],
        'member' => [
            'event' => Events\Member::class,
            'listeners' => [],
        ],
        'membership' => [
            'event' => Events\Membership::class,
            'listeners' => [],
        ],
        'merge_group' => [
            'event' => Events\MergeGroup::class,
            'listeners' => [],
        ],
        'meta' => [
            'event' => Events\Meta::class,
            'listeners' => [],
        ],
        'milestone' => [
            'event' => Events\Milestone::class,
            'listeners' => [],
        ],
        'org_block' => [
            'event' => Events\OrgBlock::class,
            'listeners' => [],
        ],
        'organization' => [
            'event' => Events\Organization::class,
            'listeners' => [],
        ],
        'package' => [
            'event' => Events\Package::class,
            'listeners' => [],
        ],
        'page_build' => [
            'event' => Events\PageBuild::class,
            'listeners' => [],
        ],
        'personal_access_token_request' => [
            'event' => Events\PersonalAccessTokenRequest::class,
            'listeners' => [],
        ],
        'ping' => [
            'event' => Events\Ping::class,
            'listeners' => [],
        ],
        'project' => [
            'event' => Events\Project::class,
            'listeners' => [],
        ],
        'project_card' => [
            'event' => Events\ProjectCard::class,
            'listeners' => [],
        ],
        'project_column' => [
            'event' => Events\ProjectColumn::class,
            'listeners' => [],
        ],
        'projects_v2' => [
            'event' => Events\ProjectsV2::class,
            'listeners' => [],
        ],
        'projects_v2_item' => [
            'event' => Events\ProjectsV2Item::class,
            'listeners' => [],
        ],
        'projects_v2_status_update' => [
            'event' => Events\ProjectsV2StatusUpdate::class,
            'listeners' => [],
        ],
        'public' => [
            'event' => Events\PublicEvent::class,
            'listeners' => [],
        ],
        'pull_request' => [
            'event' => Events\PullRequest::class,
            'listeners' => [],
        ],
        'pull_request_review' => [
            'event' => Events\PullRequestReview::class,
            'listeners' => [],
        ],
        'pull_request_review_comment' => [
            'event' => Events\PullRequestReviewComment::class,
            'listeners' => [],
        ],
        'pull_request_review_thread' => [
            'event' => Events\PullRequestReviewThread::class,
            'listeners' => [],
        ],
        'push' => [
            'event' => Events\Push::class,
            'listeners' => [],
        ],
        'registry_package' => [
            'event' => Events\RegistryPackage::class,
            'listeners' => [],
        ],
        'release' => [
            'event' => Events\Release::class,
            'listeners' => [],
        ],
        'repository' => [
            'event' => Events\Repository::class,
            'listeners' => [],
        ],
        'repository_advisory' => [
            'event' => Events\RepositoryAdvisory::class,
            'listeners' => [],
        ],
        'repository_dispatch' => [
            'event' => Events\RepositoryDispatch::class,
            'listeners' => [],
        ],
        'repository_import' => [
            'event' => Events\RepositoryImport::class,
            'listeners' => [],
        ],
        'repository_ruleset' => [
            'event' => Events\RepositoryRuleset::class,
            'listeners' => [],
        ],
        'repository_vulnerability_alert' => [
            'event' => Events\RepositoryVulnerabilityAlert::class,
            'listeners' => [],
        ],
        'secret_scanning_alert' => [
            'event' => Events\SecretScanningAlert::class,
            'listeners' => [],
        ],
        'secret_scanning_alert_location' => [
            'event' => Events\SecretScanningAlertLocation::class,
            'listeners' => [],
        ],
        'security_advisory' => [
            'event' => Events\SecurityAdvisory::class,
            'listeners' => [],
        ],
        'security_and_analysis' => [
            'event' => Events\SecurityAndAnalysis::class,
            'listeners' => [],
        ],
        'sponsorship' => [
            'event' => Events\Sponsorship::class,
            'listeners' => [],
        ],
        'star' => [
            'event' => Events\Star::class,
            'listeners' => [
                CommitCommentListener::class,
            ],
        ],
        'status' => [
            'event' => Events\Status::class,
            'listeners' => [],
        ],
        'sub_issues' => [
            'event' => Events\SubIssues::class,
            'listeners' => [],
        ],
        'team' => [
            'event' => Events\Team::class,
            'listeners' => [],
        ],
        'team_add' => [
            'event' => Events\TeamAdd::class,
            'listeners' => [],
        ],
        'watch' => [
            'event' => Events\Watch::class,
            'listeners' => [],
        ],
        'workflow_dispatch' => [
            'event' => Events\WorkflowDispatch::class,
            'listeners' => [],
        ],
        'workflow_job' => [
            'event' => Events\WorkflowJob::class,
            'listeners' => [],
        ],
        'workflow_run' => [
            'event' => Events\WorkflowRun::class,
            'listeners' => [],
        ],
        'generic' => [
            'event' => Events\Generic::class,
            'listeners' => [],
        ],
    ],

    'cache' => [
        'enabled' => env('GITHOOK_CACHE_ENABLED', false),
        'key' => env('GITHOOK_CACHE_KEY', 'githook'),
        'ttl' => env('GITHOOK_CACHE_TTL', 60),
    ],

    /*
    |--------------------------------------------------------------------------
    | Listener for all events
    |--------------------------------------------------------------------------
    |
    | This listener will be called for all events.
    |
    */
    '*' => [
        GenericListener::class,
    ],
];
