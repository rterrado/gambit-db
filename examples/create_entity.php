<?php

# Instantiates a new PhylumDB Object
$db = new PhylumDB();

# Phylum looks up if .phy/user/ directory exists
# gets record-schema.json
$db->genus('users');

# Create a new folder in the users directory
# Create a new index.json for this entity
$db->create()->entity(
    id: 'admins'
);
