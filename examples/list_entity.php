<?php

# Instantiates a new PhylumDB Object
$db = new PhylumDB();

# Phylum looks up if .phy/user/ directory exists
$db->genus('posts');

# Gets index.json for this entity
$db->list()->entity(
    id: 'sample-user-id'
);
