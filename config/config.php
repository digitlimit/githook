<?php

use Digitlimit\Githook\Events;

return [

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
     | Github WebHook Events
     |--------------------------------------------------------------------------
     |
     | The mapping of Github webhook events to their respective event classes.
     |
     */
    'events' => [
        'branch_protection_configuration' => Events\BranchProtectionConfiguration::class,
        'branch_protection_rule' => Events\BranchProtectionRule::class,
        'check_run' => Events\CheckRun::class,
        'check_suite' => Events\CheckSuite::class,
        'code_scanning_alert' => Events\CodeScanningAlert::class,
        'commit_comment' => Events\CommitComment::class,
        'create' => Events\Create::class,
        'custom_property' => Events\CustomProperty::class,
        'custom_property_values' => Events\CustomPropertyValues::class,
        'delete' => Events\Delete::class,
        'dependabot_alert' => Events\DependabotAlert::class,
        'deploy_key' => Events\DeployKey::class,
        'deployment' => Events\Deployment::class,
        'deployment_protection_rule' => Events\DeploymentProtectionRule::class,
        'deployment_review' => Events\DeploymentReview::class,
        'deployment_status' => Events\DeploymentStatus::class,
        'discussion' => Events\Discussion::class,
        'discussion_comment' => Events\DiscussionComment::class,
        'fork' => Events\Fork::class,
        'github_app_authorization' => Events\GithubAppAuthorization::class,
        'gollum' => Events\Gollum::class,
        'installation' => Events\Installation::class,
        'installation_repositories' => Events\InstallationRepositories::class,
        'installation_target' => Events\InstallationTarget::class,
        'issue_comment' => Events\IssueComment::class,
        'issues' => Events\Issues::class,
        'label' => Events\Label::class,
        'marketplace_purchase' => Events\MarketplacePurchase::class,
        'member' => Events\Member::class,
        'membership' => Events\Membership::class,
        'merge_group' => Events\MergeGroup::class,
        'meta' => Events\Meta::class,
        'milestone' => Events\Milestone::class,
        'org_block' => Events\OrgBlock::class,
        'organization' => Events\Organization::class,
        'package' => Events\Package::class,
        'page_build' => Events\PageBuild::class,
        'personal_access_token_request' => Events\PersonalAccessTokenRequest::class,
        'ping' => Events\Ping::class,
        'project' => Events\Project::class,
        'project_card' => Events\ProjectCard::class,
        'project_column' => Events\ProjectColumn::class,
        'projects_v2' => Events\ProjectsV2::class,
        'projects_v2_item' => Events\ProjectsV2Item::class,
        'projects_v2_status_update' => Events\ProjectsV2StatusUpdate::class,
        'public' => Events\PublicEvent::class,
        'pull_request' => Events\PullRequest::class,
        'pull_request_review' => Events\PullRequestReview::class,
        'pull_request_review_comment' => Events\PullRequestReviewComment::class,
        'pull_request_review_thread' => Events\PullRequestReviewThread::class,
        'push' => Events\Push::class,
        'registry_package' => Events\RegistryPackage::class,
        'release' => Events\Release::class,
        'repository' => Events\Repository::class,
        'repository_advisory' => Events\RepositoryAdvisory::class,
        'repository_dispatch' => Events\RepositoryDispatch::class,
        'repository_import' => Events\RepositoryImport::class,
        'repository_ruleset' => Events\RepositoryRuleset::class,
        'repository_vulnerability_alert' => Events\RepositoryVulnerabilityAlert::class,
        'secret_scanning_alert' => Events\SecretScanningAlert::class,
        'secret_scanning_alert_location' => Events\SecretScanningAlertLocation::class,
        'security_advisory' => Events\SecurityAdvisory::class,
        'security_and_analysis' => Events\SecurityAndAnalysis::class,
        'sponsorship' => Events\Sponsorship::class,
        'star' => Events\Star::class,
        'status' => Events\Status::class,
        'sub_issues' => Events\SubIssues::class,
        'team' => Events\Team::class,
        'team_add' => Events\TeamAdd::class,
        'watch' => Events\Watch::class,
        'workflow_dispatch' => Events\WorkflowDispatch::class,
        'workflow_job' => Events\WorkflowJob::class,
        'workflow_run' => Events\WorkflowRun::class,
        'generic' => Events\Generic::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Github WebHook Listeners
    |--------------------------------------------------------------------------
    |
    | Its not mandatory to register listeners here, you can register listeners  
    | in your EventServiceProvider. 
    |
    */
    'listen' => [
//        CommitComment::class => [
//            \App\Listeners\CommitCommentListener::class,
//        ],
    ],
];
