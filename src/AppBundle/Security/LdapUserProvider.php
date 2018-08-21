<?php
namespace AppBundle\Security;
use Symfony\Component\Ldap\Entry;
use Symfony\Component\Security\Core\User\LdapUserProvider as SymfonyLdapUserProvider;
use Symfony\Component\Security\Core\User\User;
/**
 * Handles the mapping of ldap groups to security roles.
 * Class LdapUserProvider
 * @package AppBundle\Security
 */
class LdapUserProvider extends SymfonyLdapUserProvider
{
    private $groupMapping = [
        'forestapp_editor' => 'ROLE_EDITOR',
        'forestapp_admin' => 'ROLE_ADMIN',
        'forestapp_tecnicoregional' => 'ROLE_TECNICO_REGIONAL'
    ];
    private $groupNameRegExp = '/^CN=(?P<group>[^,]+),ou.*$/i';
    protected function loadUser($username, Entry $entry)
    {
        $roles = [];
        if (!$entry->hasAttribute('memberOf')) {
            return new User($username, '', $roles);
        }
        foreach ($entry->getAttribute('memberOf') as $groupLine) {
            $groupName = strtolower($this->getGroupName($groupLine));
            if (array_key_exists($groupName, $this->groupMapping)) {
                $roles[] = $this->groupMapping[$groupName];
            }
        }
        if (count($roles) == 0) {
          $roles = ['ROLE_USER'];
        }
        $user = new User($username, null, $roles);
        return $user;
    }
    /**
     * Get the group name from the DN
     * @param string $dn
     * @return string
     */
    private function getGroupName($dn)
    {
        $matches = [];
        return preg_match($this->groupNameRegExp, $dn, $matches) ? $matches['group'] : '';
    }
}
