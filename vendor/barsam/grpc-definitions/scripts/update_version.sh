#!/bin/bash
# Extract the current version from composer.json
CURRENT_VERSION=$(jq -r '.version' composer.json)

# Split the version into major, minor, and patch
IFS='.' read -r MAJOR MINOR PATCH <<< "$CURRENT_VERSION"

# Increment the patch version
NEW_VERSION="$MAJOR.$((MINOR + 1))".$PATCH

# Update the version in composer.json
jq --arg new_version "$NEW_VERSION" '.version = $new_version' composer.json > composer.tmp.json
mv composer.tmp.json composer.json

git add composer.json
git commit -m "Increment version to $NEW_VERSION"
git push