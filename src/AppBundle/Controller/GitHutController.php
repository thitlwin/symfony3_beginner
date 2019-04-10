<?php 

namespace AppBundle\Controller;

// use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class GitHutController  extends Controller
{
	/**
     * @Route("/{username}", name="githut", defaults = {"username": "codereviewvideos"})
     */
	public function githutAction(Request $request, $username)
	{
		return $this->render("githut/index.html.twig", ['username' => $username]);
	}

	/**
	* @Route("/profile/{username}", name="profile")
	*/
	public function profileAction(Request $request, $username)
	{
		$profile = $this->get('github_api')->getProfile($username);
		return $this->render('githut/profile.html.twig', $profile);
	}

    /**
    * @Route("/repos/{username}", name="repos")
    */
    public function reposAction(Request $request, $username)
    {
        $repos = $this->get('github_api')->getRepositories($username);
        return $this->render('githut/repos.html.twig', $repos);
    }
}