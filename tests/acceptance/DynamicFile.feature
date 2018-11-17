Feature: DynamicFile
  In order to see specific file
  As a user
  I need to be able to generate my own file

Scenario: generate my service worker
	Given I have key_api '123'
    When I call service_worker
    Then I should see that my service workers is "abc123"

Scenario: generate my service worker to another user
	Given I have key_api "321"
    When I call service_worker
    Then I should see that my service workers is "abc321"    