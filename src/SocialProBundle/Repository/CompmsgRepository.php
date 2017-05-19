<?php

namespace SocialProBundle\Repository;

/**
 * CompmsgRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CompmsgRepository extends \Doctrine\ORM\EntityRepository
{
    public function findmsg($complaint){
        $query = $this->getEntityManager()
            ->createQuery("select c from SocialProBundle:Compmsg c where c.complaint=:complaint ORDER BY c.date DESC ")
            ->setParameter('complaint',$complaint);
        return $query->getResult();
    }
    public function findmsgadmin($complaint){
        $query = $this->getEntityManager()
            ->createQuery("select c from SocialProBundle:Compmsg c where c.complaint=:complaint")
            ->setParameter('complaint',$complaint);
        return $query->getResult();
    }
}
