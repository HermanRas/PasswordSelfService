$DomainControllers = Get-ADDomainController -Filter *

Foreach($DC in $DomainControllers)
 {
 Write-Host  "DC :" $dc 
Get-ADUser -Identity $args[0] -Server $DC.Hostname -Properties AccountLockoutTime,LastBadPasswordAttempt,BadPwdCount
}
