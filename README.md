# Statamic Dynamic Token ![Statamic 3](https://img.shields.io/badge/statamic-3-blue.svg?style=flat-square)

Allows you to use standard Statamic v3 forms while also leveraging static caching.

## Requirements

- Statamic v3

## Installation

From your site folder, run `composer require webographen/statamic-dynamic-token`

## Usage

Add the `{{ dynamic_token }}` tag to the view so it appears on the same page as your form.

The inserted JS adds tokens to all forms that have an input with `name="_token"`.

Tokens are refreshed every 15 minutes to prevent time-out.

## Credit

This feature was originally developed by [Rob de Kort](https://github.com/robdekort)
as part of the [Peak Statamic Starter Kit](https://github.com/studio1902/statamic-peak).