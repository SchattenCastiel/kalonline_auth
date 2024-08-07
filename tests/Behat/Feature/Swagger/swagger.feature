# This file contains a user story for demonstration only.
# Learn how to get started with Behat and BDD on Behat's website:
# http://behat.org/en/latest/quick_start.html

Feature: As user I just want to see a running swagger ui

    Scenario: If I call the url with /api/doc I just want to receive the correct http status code 200
        When I call the url with "api/doc"
        Then I will receive an http status code 200
