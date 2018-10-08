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
        'forestar_admin' => 'ROLE_ADMIN',
        'forestar_admin_consulta'=> 'ROLE_ADMIN_CONSULTA',
        'forestar_economia'=> 'ROLE_ECONOMIA',
        'forestar_consulta'=> 'ROLE_CONSULTA',
        'forestar_legales_consulta'=> 'ROLE_LEGALES',
        'forestar_contable'=> 'ROLE_CONTABLE',
        'forestar_legales'=> 'ROLE_LEGALES',
        'forestar_sig'=> 'ROLE_SIG',
        'forestar_promocion'=> 'ROLE_PROMOCION',
        'forestar_liquidaciones'=> 'ROLE_LIQUIDACIONES',
        'forestar_data_entry'=> 'ROLE_DATA_ENTRY'
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
