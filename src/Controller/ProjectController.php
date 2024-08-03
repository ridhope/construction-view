<?php
namespace App\Controller;

use App\Entity\Project;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProjectController extends AbstractController
{
    #[Route('/api/projects', name: 'api_projects', methods: ['GET'])]
    public function getAllProjects(EntityManagerInterface $em): JsonResponse
    {
        $projects = $em->getRepository(Project::class)->findAll();
        return $this->json($projects);
    }

    #[Route('/api/projects/{id}', name: 'api_project', methods: ['GET'])]
    public function getProjectById(EntityManagerInterface $em, string $id): JsonResponse
    {
        $project = $em->getRepository(Project::class)->find($id);
        if (!$project) {
            return $this->json(['message' => 'Project not found'], Response::HTTP_NOT_FOUND);
        }
        return $this->json($project);
    }

    #[Route('/projects', name: 'project_index', methods: ['GET'])]
    public function index(EntityManagerInterface $em): Response
    {
        $projects = $em->getRepository(Project::class)->findAll();
        return $this->render('project/index.html.twig', ['projects' => $projects]);
    }

    #[Route('/projects/{id}', name: 'project_show', methods: ['GET'])]
    public function show(EntityManagerInterface $em, string $id): Response
    {
        $project = $em->getRepository(Project::class)->find($id);
        if (!$project) {
            throw $this->createNotFoundException('Project not found');
        }
        return $this->render('project/show.html.twig', ['project' => $project]);
    }
}