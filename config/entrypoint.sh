#!/bin/bash

# Start sendmail
service sendmail start

# Start Apache (using the command that the php:apache image uses by default)
apache2-foreground
