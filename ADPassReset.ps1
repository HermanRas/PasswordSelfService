﻿echo "Unlocking $args <br>"
echo "Unlocking @ DataCentre <br>"
Unlock-ADAccount -server "dat-ser-dc-01" -Identity "$args"
echo "Unlocking @ Cullinan <br>"
Unlock-ADAccount -server "cdm-ser-dc-01" -Identity "$args"
echo "Unlocking @ Koffie <br>"
Unlock-ADAccount -server "kof-ser-dc-01" -Identity "$args"
echo "Unlocking @ Finsch <br>"
Unlock-ADAccount -server "fin-ser-dc-01" -Identity "$args"
echo "Unlocking @ Head Office <br>"
Unlock-ADAccount -server "phq-ser-dc-01" -Identity "$args"