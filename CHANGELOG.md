# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [1.6.1] - 2022-04-26

### Added

- Add `countAll` method in ClickhouseStatement. This method returns the total number of rows when using a limit in the query. Returns false otherwise.

## [1.6.0] - 2022-04-22

### Added

- Compatibility with PHP 8+
- `docker-compose.yml` to run a Clickhouse server for unit testing
- `ClickhouseQueryBuilder.php` which extend `\Doctrine\DBAL\Query\QueryBuilder` to implement Clickhouse related SQL functions.
- Ability to use `fullOuterJoin` when using a QueryBuilder.

### Changed

- Fixed incorrect unit tests
- `appendLockHint` now returns `$fromClause`. This change allows DoctrineORM to be used with this driver.
- Update phpunit version to ^9.0
- Update doctrine/coding-standard version to ^9.0

# Changelog from original repository

## [1.5.3] - 2019-07-23

### Changed
- Fix issue with database name (PR #31 from kovalevm/fix-dbname)

## [1.5.2] - 2018-07-27

### Changed
- fixed nullable column detection in `ClickHouseSchemaManager::_getPortableTableColumnDefinition`

## [1.5.1] - 2018-07-26

### Added
- added option `samplingExpression` when creating table for determine optional sampling expression

### Changed
- changed method `ClickHouseSchemaManager::listTableIndexes`

## [1.5.0] - 2018-07-25

### Added
- support of Nullable types

### Changed
- Fix `ConnectionTest::testGetServerVersion`
 
## [1.4.1] - 2018-07-16

### Added
- implemented interfaces `PingableConnection` and `ServerInfoAwareConnection` in a class `ClickHouseConnection`

## [1.4.0] - 2018-07-14

### Added
- Add implementation of `Trim` methods on platform

### Changed
- Formatted code style according to Doctrine rules

## [1.3.0] - 2018-07-03

### Changed
- smi2/phpClickHouse ^1.0
- doctrine/dbal ^2.7

## [1.2.1] - 2018-06-21

### Changed
- close #11

## [1.2.0] - 2018-06-21

### Changed
- support PHP ^7.1
- smi2/phpclickhouse ^0.18


[1.6.0]:https://github.com/Viously/dbal-clickhouse/compare/v1.5.3...v1.6.0
[1.5.3]:https://github.com/Viously/dbal-clickhouse/compare/v1.5.2...v1.5.3
[1.5.2]:https://github.com/Viously/dbal-clickhouse/compare/v1.5.1...v1.5.2
[1.5.1]:https://github.com/Viously/dbal-clickhouse/compare/v1.5.0...v1.5.1
[1.5.0]:https://github.com/Viously/dbal-clickhouse/compare/v1.4.1...v1.5.0
[1.4.1]:https://github.com/Viously/dbal-clickhouse/compare/v1.4.0...v1.4.1
[1.4.0]:https://github.com/Viously/dbal-clickhouse/compare/v1.3.0...v1.4.0
[1.3.0]:https://github.com/Viously/dbal-clickhouse/compare/v1.2.1...v1.3.0
[1.2.1]:https://github.com/Viously/dbal-clickhouse/compare/v1.2.0...v1.2.1
[1.2.0]:
