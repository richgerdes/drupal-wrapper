# Drupal Wrapper

Provides a composer package to wrap a default drupal installation.

[View on GitHub](https://github.com/roygoldman/drupal-wrapper)

## About

Drupal Wrapper provides the basic dependencies for a standard Drupal Project
installation. This allows all projects to depend on a standard set of tools and
components, and allow those dependencies to be tracked and managed centrally.

This project includes the following items and tools by default.

- drupal/core - what you want
- drupal-composer/drupal-scaffold - Includes the root web files for a project.
- drupal/console - CLI for interacting with Drupal.
- drush/drush - Another Drupal CLI tool.
- webflow/drupal-finder - library to find the root of a Drupal install.
- roygoldman/drupal-project-installers - Maps installation paths for Drupal
  components to correct paths inside a `/web` directory.
- cweagans/composer-patches - Allows a project to apply patches to dependencies.
- webmozart/path-util - A robust cross-platform utility for normalizing,
  comparing and modifying file paths.

These packages provide a solid Developement layer for any drupal project.

## Recommended Usage

This wrapper is designed for basic use. You may wish to fork this project in
order to customize the build for your Drupal project installations.

## Support

If you have any questions, issues, or feedback about this project, please file
and issue on github. If you are interested in adding a new feature of dependency
to this project, please open an issue. If you have the time to troubleshoot and
fix a bug or add a component, pull requests are welcome.
