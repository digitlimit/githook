# Githook
[![Latest Version on Packagist](https://img.shields.io/packagist/v/digitlimit/githook.svg?style=flat-square)](https://packagist.org/packages/digitlimit/githook)
[![Total Downloads](https://img.shields.io/packagist/dt/digitlimit/githook.svg?style=flat-square)](https://packagist.org/packages/digitlimit/githook)
![GitHub Actions](https://github.com/digitlimit/githook/actions/workflows/githook.yml/badge.svg)
![PHP versions](https://img.shields.io/badge/PHP-8.0%20|%208.2%20|%208.3-blue.svg)

A Laravel package to handle GitHub webhooks seamlessly by dispatching Laravel events for all GitHub events. Users can listen to and handle these events easily.

![image](https://github.com/user-attachments/assets/2390e740-96bd-4c3f-b848-60beee43674a)


## Installation

To install the package, use Composer:

```bash
composer require digitlimit/githook
```

## Configuration
Publish Configuration File
To publish the configuration file, run:

```bash
php artisan vendor:publish --provider="Digitlimit\Githook\GithookServiceProvider"
```

## Configure Environment Variables
Add the following environment variables to your .env file:

```
GITHOOK_SECRET=your-github-webhook-secret
```

## Available Events
Here are the events you can subscribe to:

```
use Digitlimit\Githook\Events\BranchProtectionConfiguration;
use Digitlimit\Githook\Events\BranchProtectionRule;
use Digitlimit\Githook\Events\CheckRun;
use Digitlimit\Githook\Events\CheckSuite;
use Digitlimit\Githook\Events\CodeScanningAlert;
use Digitlimit\Githook\Events\CommitComment;
use Digitlimit\Githook\Events\Create;
use Digitlimit\Githook\Events\CustomProperty;
use Digitlimit\Githook\Events\CustomPropertyValues;
use Digitlimit\Githook\Events\Delete;
use Digitlimit\Githook\Events\DependabotAlert;
use Digitlimit\Githook\Events\DeployKey;
use Digitlimit\Githook\Events\Deployment;
use Digitlimit\Githook\Events\DeploymentProtectionRule;
use Digitlimit\Githook\Events\DeploymentReview;
use Digitlimit\Githook\Events\DeploymentStatus;
use Digitlimit\Githook\Events\Discussion;
use Digitlimit\Githook\Events\DiscussionComment;
use Digitlimit\Githook\Events\Fork;
use Digitlimit\Githook\Events\GithubAppAuthorization;
use Digitlimit\Githook\Events\Gollum;
use Digitlimit\Githook\Events\Installation;
use Digitlimit\Githook\Events\InstallationRepositories;
use Digitlimit\Githook\Events\InstallationTarget;
use Digitlimit\Githook\Events\IssueComment;
use Digitlimit\Githook\Events\Issues;
use Digitlimit\Githook\Events\Label;
use Digitlimit\Githook\Events\MarketplacePurchase;
use Digitlimit\Githook\Events\Member;
use Digitlimit\Githook\Events\Membership;
use Digitlimit\Githook\Events\MergeGroup;
use Digitlimit\Githook\Events\Meta;
use Digitlimit\Githook\Events\Milestone;
use Digitlimit\Githook\Events\OrgBlock;
use Digitlimit\Githook\Events\Organization;
use Digitlimit\Githook\Events\Package;
use Digitlimit\Githook\Events\PageBuild;
use Digitlimit\Githook\Events\PersonalAccessTokenRequest;
use Digitlimit\Githook\Events\Ping;
use Digitlimit\Githook\Events\Project;
use Digitlimit\Githook\Events\ProjectCard;
use Digitlimit\Githook\Events\ProjectColumn;
use Digitlimit\Githook\Events\ProjectsV2;
use Digitlimit\Githook\Events\ProjectsV2Item;
use Digitlimit\Githook\Events\ProjectsV2StatusUpdate;
use Digitlimit\Githook\Events\PublicEvent;
use Digitlimit\Githook\Events\PullRequest;
use Digitlimit\Githook\Events\PullRequestReview;
use Digitlimit\Githook\Events\PullRequestReviewComment;
use Digitlimit\Githook\Events\PullRequestReviewThread;
use Digitlimit\Githook\Events\Push;
use Digitlimit\Githook\Events\RegistryPackage;
use Digitlimit\Githook\Events\Release;
use Digitlimit\Githook\Events\Repository;
use Digitlimit\Githook\Events\RepositoryAdvisory;
use Digitlimit\Githook\Events\RepositoryDispatch;
use Digitlimit\Githook\Events\RepositoryImport;
use Digitlimit\Githook\Events\RepositoryRuleset;
use Digitlimit\Githook\Events\RepositoryVulnerabilityAlert;
use Digitlimit\Githook\Events\SecretScanningAlert;
use Digitlimit\Githook\Events\SecretScanningAlertLocation;
use Digitlimit\Githook\Events\SecurityAdvisory;
use Digitlimit\Githook\Events\SecurityAndAnalysis;
use Digitlimit\Githook\Events\Sponsorship;
use Digitlimit\Githook\Events\Star;
use Digitlimit\Githook\Events\Status;
use Digitlimit\Githook\Events\SubIssues;
use Digitlimit\Githook\Events\Team;
use Digitlimit\Githook\Events\TeamAdd;
use Digitlimit\Githook\Events\Watch;
use Digitlimit\Githook\Events\WorkflowDispatch;
use Digitlimit\Githook\Events\WorkflowJob;
use Digitlimit\Githook\Events\WorkflowRun;
use Digitlimit\Githook\Events\Generic;
```

## Subscribing to Events
You can subscribe to events either in the Laravel Event Service Provider or directly in the configuration file.

## Using Event Service Provider
To subscribe to events in the Event Service Provider, add the following to your app/Providers/EventServiceProvider.php:

```
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Digitlimit\Githook\Events\Star;
use App\Listeners\HandleStar;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        Star::class => [
            HandleStar::class,
        ],
    ];

    public function boot()
    {
        parent::boot();
    }
}
```

# Using the Configuration File
Alternatively, you can subscribe to events directly in the configuration file `config/githook.php`:
```
return [
    'events' => [
        'star' => [
            'event' => Events\Star::class,
            'listeners' => [
                \App\Listeners\HandleStar::class,
            ],
        ],
    ],
    ...
];
```

## Example Listener
Here is an example listener for the `Star` event:
```
namespace App\Listeners;

use Digitlimit\Githook\Events\Star;

class HandleStar
{
    public function handle(Star $event)
    {
        // Handle the event
    }
}
```

## How to setup webhook in GitHub
1. Setup Github Webhook if you have not done so.
https://github.com/your-username/your-repo/settings/hooks

![image](https://user-images.githubusercontent.com/2041419/137665069-f330f1e5-3907-4e59-a6b3-79c95be40ba0.png)

### Testing

```bash
composer install
php vendor/bin/testbench package:test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email frankemeks77@yahoo.com instead of using the issue tracker.

## Credits

-   [Emeka Mbah](https://github.com/digitlimit)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
